<style>
.clearfix img {
  width: 70px;
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
 

<header class="page-header page-header-dark bg-gradient-primary-to-secondary pb-10">
    <div class="container">
        <div class="page-header-content pt-4">
            <div class="row align-items-center justify-content-between">
                <div class="col-auto mt-4">
                    <h1 class="page-header-title">
                       Chat Dokter
                    </h1>
                    <div class="page-header-subtitle">
                        Page for chat dokter.
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>


<div class="container mt-n10">
    <div class="card mb-4">
        <div class="card-header">Update Your Account</div>
        <div class="card-body">
          <div class="col-12 col-md-10">
              <div class="content-wrapper"> 
  
        <!-- Content Header (Page header) -->

                <!-- Main content -->
                
                  <section class="content">
                    <div class="row">
                        <div class="col-md-8" id="chatSection">
                          <!-- DIRECT CHAT -->
                          <div class="box box-warning direct-chat direct-chat-primary">
                            <div class="box-header with-border">
                              <h3 class="box-title" id="ReciverName_txt"><?=$chatTitle;?></h3>

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
                                  
                                    <input type="hidden" id="Sender_Name" value="<?=$title;?>">
                                    <input type="hidden" id="Sender_ProfilePic" value="<?= base_url("assets/img/avatar.svg"); ?>">
                                  
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
                              <h3 class="box-title"><?=$strsubTitle;?></h3>

                              <div class="box-tools pull-right">
                                <span class="label label-danger"><?=$strsubTitle;?></span>
                                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                                </button>
                                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i>
                                </button>
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
                </div>
            </div>
        </div>
    </div>
</div>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="<?=base_url('assets/js/chat.js');?>"></script> 