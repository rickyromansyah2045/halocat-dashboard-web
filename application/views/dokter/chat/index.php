<style>
.clearfix img {
  width: 70px;
}
.direct-chat-img {
  width: 50px !important;
  height: 50px !important;
}

.fileDiv {
  position: relative;
  overflow: hidden;
}
.upload_attachmentfile {
  position: absolute;
  opacity: 0;
  right: 0;
  top: 0;
}
.btnFileOpen {margin-top: -50px; }

.direct-chat-warning .right>.direct-chat-text {
    background: #d2d6de;
    border-color: #d2d6de;
    color: #444;
	text-align: right;
}
.direct-chat-primary .right>.direct-chat-text {
    background: #3c8dbc;
    border-color: #3c8dbc;
    color: #fff;
	text-align: right;
}
.spiner{}
.spiner .fa-spin { font-size:24px;}
.attachmentImgCls{ width:450px; margin-left: -25px; cursor:pointer; }
</style>

<link rel="stylesheet" href="http://localhost/Chat-application/public/dist/css/AdminLTE.min.css">

 

<header class="page-header page-header-dark bg-gradient-primary-to-secondary pb-10">
    <div class="container">
        <div class="page-header-content pt-4">
            <div class="row align-items-center justify-content-between">
                <div class="col-auto mt-4">
                    <h1 class="page-header-title">
                       Chat Pasien
                    </h1>
                    <div class="page-header-subtitle">
                        Halaman Chat Pasien
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>


<div class="container mt-n10">
    <div class="card mb-4">
        <div class="card-header">Chat Pasien Kucing</div>
        <div class="card-body">
          <div class="col-12 col-md-10">
              <!-- <div class="content-wrapper">  -->
  
        <!-- Content Header (Page header) -->

                <!-- Main content -->
                
                  <section class="content">
                    <div class="row">
                        <div class="col-md-8" id="chatSection">
                          <!-- DIRECT CHAT -->
                          <div class="box box-warning direct-chat direct-chat-primary">
                            <div class="box-header with-border">
                              <h3 class="box-title" id="ReciverName_txt"><?=$title;?></h3>

                              <div class="box-tools pull-right">
                                <span data-toggle="tooltip" title="Clear Chat" class="ClearChat"><i class="fa fa-comments"></i></span>
                              </div>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body">
                              <!-- Conversations are loaded here -->
                              <div class="direct-chat-messages" id="content">
                                <!-- /.direct-chat-msg -->

                                <div id="dumppy"></div>

                              </div>
                              <!--/.direct-chat-messages-->
            
                            </div>
                            <!-- /.box-body -->
                            <div class="box-footer">
                              <!--<form action="#" method="post">-->
                                <div class="input-group">

                                <?php 
                                  $obj=&get_instance();
                                  $obj->load->model('UserModel');
                                  $user=$obj->UserModel->GetUserData();
                                ?>
                               
                                    <input type="hidden" id="Sender_Name" value="<?=$user['name'];?>">
                                    <input type="hidden" class="img_chat" id="Sender_ProfilePic" value="<?= base_url("assets/img/avatar.svg"); ?>">

                                  <input type="hidden" id="ReciverId_txt">
                                    <input type="text" name="message" placeholder="Type Message ..." class="form-control message">
                                      <span class="input-group-btn">
                                        <button type="button" class="btn btn-success btn-flat btnSend" id="nav_down">Send</button>
                                        <div class="fileDiv btn btn-info btn-flat"> <i class="fa fa-upload"></i> 
                                        <input type="file" name="file" class="upload_attachmentfile"/></div>
                                      </span>
                                </div>
                              <!--</form>-->
                            </div>
                            <!-- /.box-footer-->
                          </div>
                          <!--/.direct-chat -->
                        </div>


                        <div class="col-md-4">
                          <!-- USERS LIST -->
                          <div class="box box-danger">
                            <div class="box-header with-border">
                              <h3 class="box-title"><?=$chatTitle;?></h3>

                              <div class="box-tools pull-right">
                                <span class="label label-danger"><?= count($vendorslist); ?> <?=$strsubTitle;?></span>
                                <!-- <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                                </button> -->
                                <!-- <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i>
                                </button> -->
                              </div>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body no-padding">
                              <ul class="users-list clearfix">

                              <?php if(!empty($vendorslist)){
                                foreach($vendorslist as $v):
                              ?>
                                    <li class="selectVendor" id="<?=$v['id'];?>" title="<?=$v['name'];?>">
                                      <img src="<?= base_url("assets/img/avatar.svg"); ?>" alt="<?=$v['name'];?>" title="<?=$v['name'];?>">
                                      <a class="users-list-name" href="#"><?=$v['name'];?></a>
                                      <!-- <span class="users-list-date">Yesterday</span> -->
                                    </li>
                                <?php endforeach;?>
                          
                              <?php }else{?>
                                <li>
                                  <a class="users-list-name" href="#">No Vendor's Find...</a>
                                </li>
                                <?php } ?>


                              </ul>
                              <!-- /.users-list -->
                            </div>
                          </div>
                          <!--/.box -->
                        </div>
                        <!-- /.col -->            
                      </div>
                
                <!-- /.row --> 
                </section>
            <!-- /.content --> 
                <!-- </div> -->
            </div>
        </div>
    </div>
</div>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script>

$(function () {
    $('.message').keypress(function (event) {
        var keycode = (event.keyCode ? event.keyCode : event.which);
        if (keycode == '13') {
            sendTxtMessage($(this).val());
        }
    });
    $('.btnSend').click(function () {
        sendTxtMessage($('.message').val());
    });
    $('.selectVendor').click(function () {
        ChatSection(1);
        var receiver_id = $(this).attr('id');
        // alert(receiver_id);
        $('#ReciverId_txt').val(receiver_id);
        $('#ReciverName_txt').html($(this).attr('title'));

        GetChatHistory(receiver_id);

    });
    $('.upload_attachmentfile').change(function () {

        DisplayMessage('<div class="spiner"><i class="fa fa-circle-o-notch fa-spin"></i></div>');
        ScrollDown();

        var file_data = $('.upload_attachmentfile').prop('files')[0];
        var receiver_id = $('#ReciverId_txt').val();
        var form_data = new FormData();
        form_data.append('attachmentfile', file_data);
        form_data.append('type', 'Attachment');
        form_data.append('receiver_id', receiver_id);

        $.ajax({
            url: '<?= base_url("dokter/send_text_message")?>',
            dataType: 'json',
            cache: false,
            contentType: false,
            processData: false,
            data: form_data,
            type: 'post',
            success: function (response) {

                $('.upload_attachmentfile').val('');
                GetChatHistory(receiver_id);
            },
            error: function (jqXHR, status, err) {
                // alert('Local error callback');
            }
        });

    });
    $('.ClearChat').click(function () {
        var receiver_id = $('#ReciverId_txt').val();
        $.ajax({
            //dataType : "json",
            url: '<?= base_url("dokter/chat_clear_client_cs?receiver_id=")?>' + receiver_id,
            // url: 'chat-clear?receiver_id=' + receiver_id,
            success: function (data) {
                GetChatHistory(receiver_id);
            },
            error: function (jqXHR, status, err) {
                // alert('Local error callback');
            }
        });

    });



});	///end of jquery

function ViewAttachment(message_id) {
    //alert(message_id);
    /*$.ajax({
                  //dataType : "json",
                      url: 'view-chat-attachment?message_id='+message_id,
                  success:function(data)
                  {
                                     
                  },
                  error: function (jqXHR, status, err) {
                         // alert('Local error callback');
                  }
                });*/
}
function ViewAttachmentImage(image_url, imageTitle) {
    $('#modelTitle').html(imageTitle);
    $('#modalImgs').attr('src', image_url);
    $('#myModalImg').modal('show');
}

function ChatSection(status) {
    //chatSection
    if (status == 0) {
        $('#chatSection :input').attr('disabled', true);
    } else {
        $('#chatSection :input').removeAttr('disabled');
    }
}
ChatSection(0);


function ScrollDown() {
    var elmnt = document.getElementById("content");
    var h = elmnt.scrollHeight;
    $('#content').animate({ scrollTop: h }, 1000);
}
window.onload = ScrollDown();

function DisplayMessage(message) {
    var Sender_Name = $('#Sender_Name').val();
    var Sender_ProfilePic = $('#Sender_ProfilePic').val();

    var str = '<div class="direct-chat-msg right">';
    str += '<div class="direct-chat-info clearfix">';
    str += '<span class="direct-chat-name pull-right">' + Sender_Name;
    str += '</span><span class="direct-chat-timestamp pull-left"></span>'; //23 Jan 2:05 pm
    str += '</div><img class="direct-chat-img" src="' + Sender_ProfilePic + '" alt="">';
    str += '<div class="direct-chat-text">' + message;
    str += '</div></div>';
    $('#dumppy').append(str);
}

function sendTxtMessage(message) {
    var messageTxt = message.trim();
    if (messageTxt != '') {
        // console.log(message);
        DisplayMessage(messageTxt);

        var receiver_id = $('#ReciverId_txt').val();
        $.ajax({
            dataType: "json",
            type: 'post',
            data: { messageTxt: messageTxt, receiver_id: receiver_id },
            url: '<?= base_url("dokter/send_text_message")?>',
            success: function (data) {
                GetChatHistory(receiver_id)
            },
            error: function (jqXHR, status, err) {
                // alert('Local error callback');
            }
        });



        ScrollDown();
        $('.message').val('');
        $('.message').focus();
    } else {
        $('.message').focus();
    }
}

function GetChatHistory(receiver_id) {
    $.ajax({
        //dataType : "json",
        url: '<?= base_url("dokter/get_chat_history_by_vendor?receiver_id=")?>' + receiver_id,
        success: function (data) {
            $('#dumppy').html(data);
            ScrollDown();
        },
        error: function (jqXHR, status, err) {
            // alert('Local error callback');
        }
    });
}

setInterval(function () {
    var receiver_id = $('#ReciverId_txt').val();
    if (receiver_id != '') { GetChatHistory(receiver_id); }
}, 3000);

</script>