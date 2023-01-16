@inject('carbon', 'Carbon\Carbon')
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
<div class="vc_column-inner"><div class="wpb_wrapper" style="background-image: url({{asset('wp-content/uploads/2017/06/brad6b69.jpg')}});"><div class="vc_empty_space" style="height: 2em"><span class="vc_empty_space_inner"></span></div><div class="vc_empty_space  hide_on_mobile" style="height: 4em"><span class="vc_empty_space_inner"></span></div><div id="sc_content_1399174670" class="sc_content color_style_default sc_content_default sc_content_width_1_1 sc_float_center"><div class="sc_content_container"><div class="sc_layouts_item"><div id="sc_layouts_title_1020713187" class="sc_layouts_title with_content"><div class="sc_layouts_title_content"><div class="sc_layouts_title_title">							<h1 class="sc_layouts_title_caption">News & Events </h1>
							</div><div class="sc_layouts_title_breadcrumbs"><div class="breadcrumbs"><a class="breadcrumbs_item home" href="../index.html">Home</a><span class="breadcrumbs_delimiter"></span><a href="../all-posts/index.html">News & Events</a></div></div></div><!-- .sc_layouts_title_content --></div><!-- /.sc_layouts_title --></div></div></div><!-- /.sc_content --><div class="vc_empty_space  hide_on_mobile" style="height: 5.25em"><span class="vc_empty_space_inner"></span></div><div class="vc_empty_space" style="height: 2em"><span class="vc_empty_space_inner"></span></div></div></div>





                            <div class="page_content_wrap scheme_default">
               <div class="content">
                  <div class="chess_wrap posts_container">
                     @foreach($news as $key => $new)
                     <article id="post-{{$key + 1}}" 
                        class="post_item post_layout_chess post_layout_chess_1 post_format_standard post-1487 post type-post status-publish format-standard has-post-thumbnail hentry category-news-events"	>
                        <div class="post_featured with_thumb hover_icon alhambra-full-height post_featured_bg alhambra_inline_505113749">
                           <div class="mask"></div>
                           <div class="icons" style="background-image: url({{ asset('uploads/news/'.$new->image) }})"><a href="{{route('frontend-news-show', $new->id)}}" aria-hidden="true" class="icon-eye-empty"></a></div>
                        </div>
                        <div class="post_inner">
                           <div class="post_inner_content">
                              <div class="post_header entry-header">
                                 <h3 class="post_title entry-title"><a href="{{route('frontend-news-show', $new->id)}}" rel="bookmark">{{$new->title ?? ''}}</a></h3>
                                 <div class="post_meta">						<span class="post_meta_item post_categories"><a rel="category tag">News &amp; Events</a></span>
                                    <span class="post_meta_item post_date"><a href="{{route('frontend-news-show', $new->id)}}">{{ $carbon::parse($new->created_at)->format('d M Y') }}</a></span>
                                 
                                  
                                    <a href="../gmca-provides-meals-to-homeless%ef%bf%bc/index.html#respond" class="post_meta_item post_counters_item post_counters_comments trx_addons_icon-comment"><span class="post_counters_number">0</span><span class="post_counters_label">Comments</span></a> 
                                 </div>
                                 <!-- .post_meta -->
                              </div>
                              <!-- .entry-header -->
                              <div class="post_content entry-content">
                                 <div class="post_content_inner">
                                    <p>{{ Str::limit($new->description, 260) }}</p>
                                 </div>
                                 <p><a class="more-link" href="{{route('frontend-news-show', $new->id)}}">Read more</a></p>
                              </div>
                              <!-- .entry-content -->
                           </div>
                        </div>
                        <!-- .post_inner -->
                     </article>
                        @endforeach

                        <div class="d" style="padding-top:150px;"></div>
               
                  </div>
      
               </div>
               <!-- </.content> -->
            </div>
          

            @endsection