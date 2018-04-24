 <!--form message-->
 <section class="form-mess">
    <div class="container">
        <div class="row">
            <form id="form_feedback" action="admin/feedback/them" method="POST" enctype="multipart/form-data">
            <div class="col-md-4 col-xs-12 left-form">               
                    <input type="text" name="ten" placeholder="Tên *">
                    <input type="email" name="email" placeholder="Email *">
                    <input type="number" name="phone" placeholder="Điện thoại liên hệ *">                   
            </div>
            <div class="col-md-4 col-xs-12">
                <textarea placeholder="Nội dung tin nhắn *" name="noidung" cols="50" rows="8"></textarea>
            </div>
        </form>      
            <div class="col-md-4 col-xs-12 middle">
                <h3>Dịch vụ phản hồi</h3>
                <p>Chúng tôi luôn luôn lắng nghe phản hồi của bạn</p>
                <button type="button" data-toggle="modal" data-target="#feedback">Gửi ngay</button>
            </div>
        </div>
        <div class="promise">
            <div class="row">
                <div class="col-md-4 col-xs-12 text-promise">
                    Chúng tôi sẽ liên lạc với bạn ngay khi nhận được thông tin
                </div>
                <div class="col-md-4 col-xs-12 reset-padding-container btn-sendMess">
                    <button class="send">Gửi tin nhắn</button>
                </div>
                <div class="col-md-4 col-xs-12"></div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</section>

<!-- Modal -->
<div id="feedback" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Modal Header</h4>
            </div>
            <div class="modal-body">
                <p>Some text in the modal.</p>
            </div>            
        </div>
        <!-- Modal content-->        
    </div>
</div>

@section('define-js')
<script>
    $('.send').click(function() {
       $('#form_feedback').submit();
    });
</script>
@stop