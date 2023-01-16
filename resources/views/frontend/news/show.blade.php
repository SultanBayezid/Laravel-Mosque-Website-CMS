@extends('layouts.master') 
@section('content') 
<style >

.vc_custom_1631729894361{background-color: #0065b5 !important;}
.vc_custom_1631729909072{background-color: #0277d7 !important;}
.vc_custom_1631730228592{padding-left: 30px !important;}

.vc_icon_element.vc_icon_element-outer .vc_icon_element-inner {
    text-align: center;
    display: inline-block;
    border: 2px solid transparent;
    box-sizing: content-box;
    position: relative;
}
</style>
<div class="vc_column-inner"><div class="wpb_wrapper" style="background-image: url({{asset('wp-content/uploads/2017/06/brad6b69.jpg')}});"><div class="vc_empty_space" style="height: 2em"><span class="vc_empty_space_inner"></span></div><div class="vc_empty_space  hide_on_mobile" style="height: 4em"><span class="vc_empty_space_inner"></span></div><div id="sc_content_1399174670" class="sc_content color_style_default sc_content_default sc_content_width_1_1 sc_float_center"><div class="sc_content_container"><div class="sc_layouts_item"><div id="sc_layouts_title_1020713187" class="sc_layouts_title with_content"><div class="sc_layouts_title_content"><div class="sc_layouts_title_title">							<h1 class="sc_layouts_title_caption">{{$news->title}} </h1>
							</div><div class="sc_layouts_title_breadcrumbs"><div class="breadcrumbs"><a class="breadcrumbs_item home" href="../index.html">Home</a><span class="breadcrumbs_delimiter"></span><a href="../all-posts/index.html">News & Events</a></div></div></div><!-- .sc_layouts_title_content --></div><!-- /.sc_layouts_title --></div></div></div><!-- /.sc_content --><div class="vc_empty_space  hide_on_mobile" style="height: 5.25em"><span class="vc_empty_space_inner"></span></div><div class="vc_empty_space" style="height: 2em"><span class="vc_empty_space_inner"></span></div></div></div>





                            <div class="page_content_wrap scheme_default">
               <div class="content">
                  <div class="chess_wrap posts_container">
                 

                  <div class="card-body">
                  <div class="vc_column-inner">
                    
                  <div class="wpb_wrapper" style="padding:100px;">

                  <div class="image">
                    <img src="{{ asset('uploads/news/'.$news->image) }}" alt="" srcset="">
                 
                  </div>
                  <div class="image">
                  {!! $news->description !!}
                  </div>

                  </div>
                  </div>
               
                  </div>
      
               </div>
               <!-- </.content> -->
            </div>
          

            @endsection