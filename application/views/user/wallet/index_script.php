<script src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/4.1.1/crypto-js.min.js" integrity="sha512-E8QSvWZ0eCLGk4km3hxSsNmGWbLtSCSUcewDQPQWZF6pEU8GlT8a5fF32wOl1i8ftdMhssTrF/OhyGWwonTcXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    var userData;

    $(function(){
        $.ajax({
            url: `<?= $_ENV['API_URL']; ?>/users/data`,
            type: 'GET',
            beforeSend: function(xhr) {
                xhr.setRequestHeader("Authorization", "Bearer <?= $this->session->userdata('token'); ?>");
            },
            success: function(response) {
                if (response.success) {
                    userData = response?.data;
                    $("#balance").html(response?.data?.e_money || 0);
                    if ((response?.data?.e_money || 0) > 0) {
                        $('#card-body-withdrawal').html(`<form id="form-withdraw"><div class="form-group">
                            <label for="amount">Amount</label>
                            <input class="form-control" id="amount" type="number" max="${response?.data?.e_money}">
                        </div>
                        <div class="form-group">
                            <label for="information">Withdrawal Information</label>
                            <textarea class="form-control" rows="10" id="information" placeholder="[EXAMPLE]

Hi, i want to make a withdrawal to my bank account, here is my bank account information:

Bank Name: BCA
Account Number: 6820686657
Account Name: Muhammad Saleh Solahudin"></textarea>
                        </div>
                        <button class="btn btn-primary btn-sm btn-block" type='submit'>Send Request Withdrawal</button></form>`);

                        initFormWithdraw();
                    } else {
                        $('#card-body-withdrawal').html("<p class='mb-0'><b>Info:</b><br>Can not withdraw because your balance is 0.</p>");
                    }
                } else {
                    $('#modal-edit').modal('hide');
                    Swal.fire({
                        icon: 'error',
                        text: response.error
                    });
                }
            },
            error: function(xhr, error, code) {
                Swal.fire({
                    icon: 'error',
                    text: xhr?.responseJSON?.error || `${error}, ${(code == "" ? "internal server error or API is down!" : code)}`
                });
            },
            complete: function() {}
        });
    });

    function initFormWithdraw() {
        $('#form-withdraw').submit(function(e){
            e.preventDefault();

            if ($('#amount').val() == "") {
                Swal.fire({
                    icon: 'warning',
                    text: "Amount can not be empty!"
                });
                return
            }

            if ($('#information').val() == "") {
                Swal.fire({
                    icon: 'warning',
                    text: "Withdraw information can not be empty!"
                });
                return
            }

            let code = CryptoJS.enc.Base64.stringify(CryptoJS.enc.Utf8.parse(JSON.stringify(userData)));
            let text = encodeURIComponent(`[REQUEST WITHDRAWAL]

Request Code:
${code}

Amount:
${$('#amount').val()}

Information:
${$('#information').val()}`);

            location.href = `https://api.whatsapp.com/send/?phone=628974842870&text=${text}&type=phone_number&app_absent=0`;
        });
    }
</script>