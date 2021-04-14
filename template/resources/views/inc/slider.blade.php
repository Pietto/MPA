 
    <script   type="text/javascript" src="{{asset('fontpage/js/slider/jquery-1.9.1.min.js')}}"></script>
    <script   type="text/javascript" src="{{asset('fontpage/js/slider/jssor.slider.mini.js')}}"></script>
    <!--  -->

    <script>
        jQuery(document).ready(function ($) {
            var options = {
                $AutoPlay: true,                                    //[Optional] Whether to auto play, to enable slideshow, this option must be set to true, default value is false
                $Idle: 4000,                            //[Optional] Interval (in milliseconds) to go for next slide since the previous stopped if the slider is auto playing, default value is 3000
                $PauseOnHover: 1,                                   //[Optional] Whether to pause when mouse over if a slider is auto playing, 0 no pause, 1 pause for desktop, 2 pause for touch device, 3 pause for desktop and touch device, 4 freeze for desktop, 8 freeze for touch device, 12 freeze for desktop and touch device, default value is 1

                $ArrowKeyNavigation: true,                          //[Optional] Allows keyboard (arrow key) navigation or not, default value is false
                $SlideDuration: 800,                                //[Optional] Specifies default duration (swipe) for slide in milliseconds, default value is 500
                $MinDragOffsetToSlide: 20,                          //[Optional] Minimum drag offset to trigger slide , default value is 20
                //$SlideWidth: 600,                                 //[Optional] Width of every slide in pixels, default value is width of 'slides' container
                //$SlideHeight: 300,                                //[Optional] Height of every slide in pixels, default value is height of 'slides' container
                $SlideSpacing: 0,                                   //[Optional] Space between each slide in pixels, default value is 0
                $Cols: 1,                                  //[Optional] Number of pieces to display (the slideshow would be disabled if the value is set to greater than 1), the default value is 1
                $ParkingPosition: 0,                                //[Optional] The offset position to park slide (this options applys only when slideshow disabled), default value is 0.
                $UISearchMode: 1,                                   //[Optional] The way (0 parellel, 1 recursive, default value is 1) to search UI components (slides container, loading screen, navigator container, arrow navigator container, thumbnail navigator container etc).
                $PlayOrientation: 1,                                //[Optional] Orientation to play slide (for auto play, navigation), 1 horizental, 2 vertical, 5 horizental reverse, 6 vertical reverse, default value is 1
                $DragOrientation: 1,                                //[Optional] Orientation to drag slide, 0 no drag, 1 horizental, 2 vertical, 3 either, default value is 1 (Note that the $DragOrientation should be the same as $PlayOrientation when $Cols is greater than 1, or parking position is not 0)

                $ArrowNavigatorOptions: {                       //[Optional] Options to specify and enable arrow navigator or not
                    $Class: $JssorArrowNavigator$,              //[Requried] Class to create arrow navigator instance
                    $ChanceToShow: 1,                               //[Required] 0 Never, 1 Mouse Over, 2 Always
                    $AutoCenter: 2,                                 //[Optional] Auto center arrows in parent container, 0 No, 1 Horizontal, 2 Vertical, 3 Both, default value is 0
                    $Steps: 1                                       //[Optional] Steps to go for each navigation request, default value is 1
                },

                $ThumbnailNavigatorOptions: {
                    $Class: $JssorThumbnailNavigator$,              //[Required] Class to create thumbnail navigator instance
                    $ChanceToShow: 2,                               //[Required] 0 Never, 1 Mouse Over, 2 Always

                    $ActionMode: 1,                                 //[Optional] 0 None, 1 act by click, 2 act by mouse hover, 3 both, default value is 1
                    $AutoCenter: 0,                                 //[Optional] Auto center thumbnail items in the thumbnail navigator container, 0 None, 1 Horizontal, 2 Vertical, 3 Both, default value is 3
                    $Rows: 1,                                      //[Optional] Specify lanes to arrange thumbnails, default value is 1
                    $SpacingX: 3,                                   //[Optional] Horizontal space between each thumbnail in pixel, default value is 0
                    $SpacingY: 3,                                   //[Optional] Vertical space between each thumbnail in pixel, default value is 0
                    $Cols: 9,                              //[Optional] Number of pieces to display, default value is 1
                    $ParkingPosition: 260,                          //[Optional] The offset position to park thumbnail
                    $Orientation: 1,                                //[Optional] Orientation to arrange thumbnails, 1 horizental, 2 vertical, default value is 1
                    $NoDrag: false                            //[Optional] Disable drag or not, default value is false
                }
            };

            var jssor_slider1 = new $JssorSlider$("slider1_container", options);

            //responsive code begin
            //you can remove responsive code if you don't want the slider scales while window resizing
            function ScaleSlider() {
                var bodyWidth = document.body.clientWidth;
                if (bodyWidth)
                    jssor_slider1.$ScaleWidth(Math.min(bodyWidth, 980));
                else
                    window.setTimeout(ScaleSlider, 30);
            }
            ScaleSlider();

            $(window).bind("load", ScaleSlider);
            $(window).bind("resize", ScaleSlider);
            $(window).bind("orientationchange", ScaleSlider);
            //responsive code end
        });
    </script>
    <div style="position: relative; z-index: 0; width: 100%; background-color: #172029; overflow: hidden;">
        <div style="position: relative; left: 50%; width: 5000px; text-align: center; margin-left: -2500px;">
            <!-- Jssor Slider Begin -->
            <div id="slider1_container" style="position: relative; margin: 0 auto;
                top: 0px; left: 0px; width: 980px; height: 400px; background: url({{asset('fontpage/image/student-849825_1920.jpg')}}) top center no-repeat;">
                <!-- Loading Screen -->
                <div u="loading" style="position: absolute; top: 0px; left: 0px;">
                    <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block;
                        top: 0px; left: 0px; width: 100%; height: 100%;">
                    </div>
                    <div style="position: absolute; display: block; background: url({{asset('fontpage/images/mitfarm.png')}}) no-repeat center center;
                        top: 0px; left: 0px; width: 100%; height: 100%;">
                    </div>
                </div>
                <!-- Slides Container -->
                <div u="slides" style="position: absolute; left: 0px; top: 0px; width: 980px;
                    height: 400px; overflow: hidden;">
        <?php
    $allslider=DB::table('sliders')
             ->where('slider_status',0)
             ->limit(6)
             ->orderby('slider_id','dsce')
             ->get();
    foreach($allslider as $vslider){    ?>
                    
                    <div>
                          <div style="position: absolute; width: 480px; height: 300px; top: 10px; left: 10px;
                            text-align: left; line-height: 1.8em; font-size: 12px;">
                            <br />
                            <span style="display: block; line-height: 1em; text-transform: uppercase; font-size: 52px;
                                color: #FFFFFF;">{{$vslider->slider_title}}</span>
                            
                            <br />
                            <br />
                            
                        </div>
                        <img src="{{URL($vslider->slider_image)}}" style="position: absolute; top: 23px; left: 480px; width: 500px; height: 300px;" />
                        <img u="thumb" src="{{URL($vslider->slider_image)}}" />
                    </div>

  <?php } ?>   

  
                </div>
                
    
                <style>
                    /* jssor slider arrow navigator skin 07 css */
                    /*
                    .jssora07l                  (normal)
                    .jssora07r                  (normal)
                    .jssora07l:hover            (normal mouseover)
                    .jssora07r:hover            (normal mouseover)
                    .jssora07l.jssora07ldn      (mousedown)
                    .jssora07r.jssora07rdn      (mousedown)
                    .jssora07l.jssora07lds      (disabled)
                    .jssora07r.jssora07rds      (disabled)
                    */
                    .jssora07l, .jssora07r {
                        display: block;
                        position: absolute;
                        /* size of arrow element */
                        width: 50px;
                        height: 50px;
                        cursor: pointer;
                        background: url({{asset('fontpage/images/a07.png')}}) no-repeat;
                        overflow: hidden;
                    }
                    .jssora07l { background-position: -5px -35px; }
                    .jssora07r { background-position: -65px -35px; }
                    .jssora07l:hover { background-position: -125px -35px; }
                    .jssora07r:hover { background-position: -185px -35px; }
                    .jssora07l.jssora07ldn { background-position: -245px -35px; }
                    .jssora07r.jssora07rdn { background-position: -305px -35px; }

                    .jssora07l.jssora07lds { background-position: -5px -35px; opacity: .3; pointer-events: none; }
                    .jssora07r.jssora07rds { background-position: -65px -35px; opacity: .3; pointer-events: none; }
                </style>
                <!-- Arrow Left -->
                <span u="arrowleft" class="jssora07l" style="top: 123px; left: 8px;">
                </span>
                <!-- Arrow Right -->
                <span u="arrowright" class="jssora07r" style="top: 123px; right: 8px;">
                </span>
                
            <style>
                /* jssor slider thumbnail navigator skin 04 css */
                /*
                .jssort04 .p            (normal)
                .jssort04 .p:hover      (normal mouseover)
                .jssort04 .pav          (active)
                .jssort04 .pav:hover    (active mouseover)
                .jssort04 .pdn          (mousedown)
                */

                .jssort04 {
                    position: absolute;
                    /* size of thumbnail navigator container */
                    width: 600px;
                    height: 60px;
                }

                    .jssort04 .p {
                        position: absolute;
                        top: 0;
                        left: 0;
                        width: 62px;
                        height: 32px;
                    }

                    .jssort04 .t {
                        position: absolute;
                        top: 0;
                        left: 0;
                        width: 100%;
                        height: 100%;
                        border: none;
                    }

                    .jssort04 .w, .jssort04 .pav:hover .w {
                        position: absolute;
                        width: 60px;
                        height: 30px;
                        border: #0099FF 1px solid;
                        box-sizing: content-box;
                    }

                    .jssort04 .pdn .w, .jssort04 .pav .w {
                        border-style: dashed;
                    }

                    .jssort04 .c {
                        position: absolute;
                        top: 0;
                        left: 0;
                        width: 62px;
                        height: 32px;
                        background-color: #000;
                        filter: alpha(opacity=45);
                        opacity: .45;
                        transition: opacity .6s;
                        -moz-transition: opacity .6s;
                        -webkit-transition: opacity .6s;
                        -o-transition: opacity .6s;
                    }

                    .jssort04 .p:hover .c, .jssort04 .pav .c {
                        filter: alpha(opacity=0);
                        opacity: 0;
                    }

                    .jssort04 .p:hover .c {
                        transition: none;
                        -moz-transition: none;
                        -webkit-transition: none;
                        -o-transition: none;
                    }

                    * html .jssort04 .w {
                        width /**/: 62px;
                        height /**/: 32px;
                    }
            </style>
            <!-- thumbnail navigator container -->
            <div u="thumbnavigator" class="jssort04" style="right: 0px; bottom: 0px;">
                <!-- Thumbnail Item Skin Begin -->
                <div u="slides" style="bottom: 25px; right: 30px; cursor: default;">
                    <div u="prototype" class="p">
                        <div class=w><div u="thumbnailtemplate" class="t"></div></div>
                        <div class=c></div>
                    </div>
                </div>
                <!-- Thumbnail Item Skin End -->
            </div>
            <!--#endregion Thumbnail Navigator Skin End -->
                <a style="display: none" href="http://www.jssor.com">jQuery Slider</a>
            </div>
          
        </div>
    </div>
    
    <br />
 