 <!--form message-->
 <section class="form-mess">
    <div class="container">
        <div class="row">
            <form id="form_feedback" action="admin/email/them" method="POST" enctype="multipart/form-data">
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
                <button type="button" id="btn-sendFeedback">Gửi ngay</button>
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
        @include('adminls.functions.alert')
        <div id="feedback" style="display:none">
            <form action="admin/feedback/them" method="POST" enctype="multipart/form-data">
                <textarea name="noidung" placeholder="Nhập nội dung" class="form-control" id="" cols="30" rows="5"></textarea>
                <div class="form-group">
                    <input type="text" placeholder="Thông tin của quý khách" name="customer" class="form-control">
                </div>
                <div class="form-group">
                    <button class="btn btn-primary" type="submit">Gửi phản hồi</button>
                </div>
                {!!csrf_field()!!}                
            </form>
        </div>
    </div>
</section>


