
<div class="banner-header banner-lbook3 space-30">
    <img src="public/images/banner/banner-blog.jpg" alt="Banner-header">
    <div class="text">
        <h3>Tin tức</h3>
        <p><a href="index.php" title="Home">Trang Chủ</a><i class="fa fa-caret-right"></i>Giới thiệu</p>
    </div>
</div>
<div class="container">
    <div id="googleMap">
    </div>
</div>
<!-- End google map -->
<div class="container container-ver2">
    <div class="page-contact">
        <div class="head">
            <div class="item">
                <div class="icon">
                    <span class="pe-7s-map-marker"></span>
                </div>
                <div class="text">
                    <p>Số 235</p>
                    <p>Hoàng Quốc Việt</p>
                </div>
            </div>
            <!-- End item -->
            <div class="item">
                <div class="icon">
                    <span class="pe-7s-global"></span>
                </div>
                <div class="text">
                    <p>www.fresh-fruit.com</p>
                    <p>fresh-fruit@gmail.com</p>
                </div>
            </div>
            <!-- End item -->

            <div class="item">
                <div class="icon">
                    <span class="pe-7s-call"></span>
                </div>
                <div class="text">
                    <p>Hotline:   (+84) 96-540-3229</p>
                    <p>Fax:            (+84) 96-540-3229</p>
                </div>
            </div>
            <!-- End item -->
        </div>
        <!-- End head -->
        <div class="content-text center">
        <h3>LIÊN HỆ</h3>
            <p>Để lại tin nhắn</p>
            <form class="form-horizontal space-50">
                <div class="form-group col-md-6">
                    <input type="text" placeholder="Name*" id="inputName" class="form-control">
                </div>
                <div class="form-group col-md-6">
                    <input type="text" placeholder="Email*" id="inputsumary" class="form-control">
                </div>
                
                <div class="form-group">
                    <textarea placeholder="Comment" name="Comment" id="message" class="form-control"></textarea>
                </div>
                <div class="box align-left">
                    <a title="add tags" href="#" class="link-v1 rt">Gửi</a>
                </div>
            </form>
        </div>
        <!-- End content-text -->
    </div>
</div>



<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAj5y94G_e-ptSH1fBeBB5viVsQzozOBz8&callback=myMap"></script>
<script>
    if (navigator.geolocation)
    {
        navigator.geolocation.getCurrentPosition(showCurrentLocation);
    }
    else
    {
     alert("Geolocation API not supported.");
 }

 function showCurrentLocation(position)
 {
    var latitude = 21.046362;
    var longitude = 105.783427;
    var coords = new google.maps.LatLng(latitude, longitude);

    var mapOptions = {
        zoom: 15,
        center: coords,
        mapTypeControl: true,
        mapTypeId: google.maps.MapTypeId.ROADMAP
    };

            //create the map, and place it in the HTML map div
            map = new google.maps.Map(
                document.getElementById("googleMap"), mapOptions
                );

            //place the initial marker
            var marker = new google.maps.Marker({
                position: coords,
                map: map,
                title: "Current location!"
            });
        }
    </script>