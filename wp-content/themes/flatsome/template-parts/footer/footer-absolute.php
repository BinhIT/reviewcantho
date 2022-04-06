<?php

$align = 'small-text-center';
if ( get_theme_mod( 'footer_bottom_align' ) == 'center' ) {
  $align = 'text-center';
}

ob_start();
do_action( 'flatsome_absolute_footer_secondary' );
$flatsome_absolute_footer_secondary = trim( ob_get_clean() );
$flatsome_footer_right_text = trim( get_theme_mod( 'footer_right_text' ) );

?>
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v13.0" nonce="bKh4it3f"></script>
<footer class="footer-section">
        <div class="container">
   
            <div class="footer-content pt-5 pb-5">
                <div class="row">
                    <div class="col-xl-4 col-lg-4 mb-50">
                        <div class="footer-widget">
                            <div class="footer-logo">
                                <a href="index.html"><img src="<?php echo site_url() ?>/wp-content/uploads/2022/03/logo_review_cantho.png" class="img-fluid" alt="logo"></a>
                            </div>
                            <div class="footer-text">
                                <p>Blog chia sẻ kinh nghiệm du lịch tự túc, điểm đến nổi tiếng tại Cần Thơ </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 mb-30">
                        <div class="footer-widget">
                            <div class="footer-widget-heading">
                                <h3>Link liên kết </h3>
                            </div>
                            <ul>
                                <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Trang chủ </a></li>
                                <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Giới thiệu </a></li>
                                <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Chính sách </a></li>
                                <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Liên hệ </a></li>
                                <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Tin tức mới </a></li>

                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 mb-50">
                        <div class="footer-widget">
                            <div class="footer-widget-heading">
                                <h3>Fanpage</h3>
                                <div class="fb-page" data-href="https://www.facebook.com/Review-C%E1%BA%A7n-Th%C6%A1-112239288106824" data-tabs="timeline" data-width="" data-height="150" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/Review-C%E1%BA%A7n-Th%C6%A1-112239288106824" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/Review-C%E1%BA%A7n-Th%C6%A1-112239288106824">Review Cần Thơ</a></blockquote></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>