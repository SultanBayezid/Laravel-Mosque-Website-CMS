@extends('layouts.master') 
@section('content') 

<style>
   /*!
 * Bootstrap v3.0.0
 *
 * Copyright 2013 Twitter, Inc
 * Licensed under the Apache License v2.0
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Designed and built with all the love in the world @twitter by @mdo and @fat.
 */



@font-face{font-family:'Glyphicons Halflings';src:url('../fonts/glyphicons-halflings-regular.eot');src:url('../fonts/glyphicons-halflings-regular.eot?#iefix') format('embedded-opentype'),url('../fonts/glyphicons-halflings-regular.woff') format('woff'),url('../fonts/glyphicons-halflings-regular.ttf') format('truetype'),url('../fonts/glyphicons-halflings-regular.svg#glyphicons-halflingsregular') format('svg');}.glyphicon{position:relative;top:1px;display:inline-block;font-family:'Glyphicons Halflings';font-style:normal;font-weight:normal;line-height:1;-webkit-font-smoothing:antialiased;}

.glyphicon-chevron-left:before{content:"\e079";}
.glyphicon-chevron-right:before{content:"\e080";}

</style>
<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">

  <script src="{{asset('js/bootstrap.min.js')}}"></script>
   <style>
      input[type="time"]::-webkit-calendar-picker-indicator {
    background: none;
}
.nobg{
   background: transparent;
    color: #ffffff;
    text-align: center !important;
}

   </style>


            <div class="page_content_wrap scheme_default">
               <div class="d">
               <div id="myCarousel" class="carousel slide" data-ride="carousel">
                  <!-- Indicators -->
                  <ol class="carousel-indicators">
                  @foreach($sliders as $key => $slide)
                     <li data-target="#myCarousel" data-slide-to="{{$key++}}" {{$slide->id==4 ? 'class="active"' : ''}} ></li>
                  @endforeach
                  </ol>
                  

                  <!-- Wrapper for slides -->
                  <div class="carousel-inner">
                  @foreach($sliders as $key => $slide)
                     <div class="item {{$slide->id==4 ? 'active' : ''}}">
                        <img src="{{ asset('uploads/slider/'.$slide->image) }}" alt="Los Angeles">
                     </div>
                  @endforeach

                  </div>

                  <!-- Left and right controls -->
                  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                     <span class="glyphicon glyphicon-chevron-left"></span>
                     <span class="sr-only">Previous</span>
                  </a>
                  <a class="right carousel-control" href="#myCarousel" data-slide="next">
                     <span class="glyphicon glyphicon-chevron-right"></span>
                     <span class="sr-only">Next</span>
                  </a>
                  </div>
               </div>
               <div class="content_wrap">
                  <div class="content">
                     <article id="post-346" class="post_item_single post_type_page post-346 page type-page status-publish hentry">
                        <div class="post_content entry-content">
                           <div class="vc_row wpb_row vc_row-fluid">
                              <div class="wpb_column vc_column_container vc_col-sm-12 sc_layouts_column_icons_position_left">
                                 <div class="vc_column-inner">
                                    <div class="wpb_wrapper">
                                       <div class="wpb_text_column wpb_content_element " >
                                          <div class="wpb_wrapper">
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                
                           <div class="vc_row wpb_row vc_row-fluid">
                              <div class="wpb_column vc_column_container vc_col-sm-12 sc_layouts_column_icons_position_left">
                                 <div class="vc_column-inner">
                                    <div class="wpb_wrapper">
                                       <div class="wpb_text_column wpb_content_element " >
                                          <div class="wpb_wrapper">
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="vc_row wpb_row vc_row-fluid">
                              <div class="wpb_column vc_column_container vc_col-sm-12 sc_layouts_column_icons_position_left">
                                 <div class="vc_column-inner">
                                    <div class="wpb_wrapper">
                                       <div class="vc_empty_space"   style="height: 3em"><span class="vc_empty_space_inner"></span></div>
                                       <div class="vc_empty_space  hide_on_mobile hide_on_tablet"   style="height: 3.5em"><span class="vc_empty_space_inner"></span></div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="vc_row wpb_row vc_row-fluid">
                              <div class="wpb_column vc_column_container vc_col-sm-12 sc_layouts_column_icons_position_left">
                                 <div class="vc_column-inner">
                                    <div class="wpb_wrapper">
                                       <div id="sc_title_1579743310"
                                          class="sc_title color_style_default sc_title_default">
                                          <h2 class="sc_item_title sc_title_title sc_align_center sc_item_title_style_default">Welcome to Al-Noor Islamic Centre</h2>
                                       </div>
                                       <!-- /.sc_title -->
                                       <div class="vc_empty_space"   style="height: 50px"><span class="vc_empty_space_inner"></span></div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="vc_row wpb_row vc_row-fluid">
                              <div class="wpb_column vc_column_container vc_col-sm-12 sc_layouts_column_icons_position_left">
                                 <div class="vc_column-inner">
                                    <div class="wpb_wrapper">
                                       <div class="vc_row wpb_row vc_inner vc_row-fluid">
                                          <div class="wpb_column vc_column_container vc_col-sm-4 vc_col-has-fill sc_layouts_column_icons_position_left">
                                             <div class="vc_column-inner vc_custom_1631731004239">
                                                <div class="wpb_wrapper">
                                                   <div class="vc_empty_space"   style="height: 50px"><span class="vc_empty_space_inner"></span></div>
                                                   <div class="vc_icon_element vc_icon_element-outer vc_icon_element-align-center">
                                                      <div class="vc_icon_element-inner vc_icon_element-color-custom vc_icon_element-size-xl vc_icon_element-style- vc_icon_element-background-color-grey" ><span class="vc_icon_element-icon icon-quran-rehal" style="color:#ffffff !important"></span></div>
                                                   </div>
                                                   <h2 style="font-size: 26px;color: #ffffff;text-align: center" class="vc_custom_heading" >Halaqa</h2>
                                                   <div class="vc_empty_space"   style="height: 32px"><span class="vc_empty_space_inner"></span></div>
                                                   <div class="sc_item_button sc_button_wrap sc_align_center">
                                                      <a href="our-services/index.html#halaqa" id="sc_button_1165430505" class="sc_button color_style_link2 sc_button_default servicebutton sc_button_size_small sc_button_icon_left">
                                                         <span class="sc_button_text sc_align_center"><span class="sc_button_title">Details</span></span><!-- /.sc_button_text -->
                                                      </a>
                                                      <!-- /.sc_button -->
                                                   </div>
                                                   <!-- /.sc_item_button -->
                                                   <div class="vc_empty_space"   style="height: 50px"><span class="vc_empty_space_inner"></span></div>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="wpb_column vc_column_container vc_col-sm-4 vc_col-has-fill sc_layouts_column_icons_position_left">
                                             <div class="vc_column-inner vc_custom_1631730839537">
                                                <div class="wpb_wrapper">
                                                   <div class="vc_empty_space"   style="height: 50px"><span class="vc_empty_space_inner"></span></div>
                                                   <div class="vc_icon_element vc_icon_element-outer vc_icon_element-align-center">
                                                      <div class="vc_icon_element-inner vc_icon_element-color-custom vc_icon_element-size-xl vc_icon_element-style- vc_icon_element-background-color-grey" ><span class="vc_icon_element-icon icon-islamic-mosque" style="color:#ffffff !important"></span></div>
                                                   </div>
                                                   <h2 style="font-size: 26px;color: #ffffff;text-align: center" class="vc_custom_heading" >Mosque</h2>
                                                   <div class="vc_empty_space"   style="height: 32px"><span class="vc_empty_space_inner"></span></div>
                                                   <div class="sc_item_button sc_button_wrap sc_align_center">
                                                      <a href="our-services/index.html#mosque" id="sc_button_1105181257" class="sc_button color_style_link2 sc_button_default servicebutton sc_button_size_small sc_button_icon_left">
                                                         <span class="sc_button_text sc_align_center"><span class="sc_button_title">Details</span></span><!-- /.sc_button_text -->
                                                      </a>
                                                      <!-- /.sc_button -->
                                                   </div>
                                                   <!-- /.sc_item_button -->
                                                   <div class="vc_empty_space"   style="height: 50px"><span class="vc_empty_space_inner"></span></div>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="wpb_column vc_column_container vc_col-sm-4 vc_col-has-fill sc_layouts_column_icons_position_left">
                                             <div class="vc_column-inner vc_custom_1631730799192">
                                                <div class="wpb_wrapper">
                                                   <div class="vc_empty_space"   style="height: 50px"><span class="vc_empty_space_inner"></span></div>
                                                   <div class="vc_icon_element vc_icon_element-outer vc_icon_element-align-center">
                                                      <div class="vc_icon_element-inner vc_icon_element-color-custom vc_icon_element-size-xl vc_icon_element-style- vc_icon_element-background-color-grey" ><span class="vc_icon_element-icon fas fa-user-graduate" style="color:#ffffff !important"></span></div>
                                                   </div>
                                                   <h2 style="font-size: 26px;color: #ffffff;text-align: center" class="vc_custom_heading" >Saturday School</h2>
                                                   <div class="vc_empty_space"   style="height: 32px"><span class="vc_empty_space_inner"></span></div>
                                                   <div class="sc_item_button sc_button_wrap sc_align_center">
                                                      <a href="our-services/index.html#school" id="sc_button_1759711461" class="sc_button color_style_link2 sc_button_default servicebutton sc_button_size_small sc_button_icon_left">
                                                         <span class="sc_button_text sc_align_center"><span class="sc_button_title">Details</span></span><!-- /.sc_button_text -->
                                                      </a>
                                                      <!-- /.sc_button -->
                                                   </div>
                                                   <!-- /.sc_item_button -->
                                                   <div class="vc_empty_space"   style="height: 50px"><span class="vc_empty_space_inner"></span></div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="vc_row wpb_row vc_row-fluid">
                              <div class="wpb_column vc_column_container vc_col-sm-12 sc_layouts_column_icons_position_left">
                                 <div class="vc_column-inner">
                                    <div class="wpb_wrapper">
                                       <div class="vc_empty_space"   style="height: 3em"><span class="vc_empty_space_inner"></span></div>
                                       <div class="vc_empty_space  hide_on_mobile hide_on_tablet"   style="height: 3.5em"><span class="vc_empty_space_inner"></span></div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div data-vc-full-width="true" data-vc-full-width-init="false" data-vc-stretch-content="true" class="vc_row wpb_row vc_row-fluid vc_row-o-equal-height vc_row-flex">
                              <div class="wpb_column vc_column_container vc_col-sm-6 vc_col-has-fill sc_layouts_column_icons_position_left">
                                 <div class="vc_column-inner vc_custom_1631719959691">
                                    <div class="wpb_wrapper">
                                       <h2 style="font-size: 26px;color: #ffffff;text-align: center" class="vc_custom_heading" >Prayer Time Begins</h2>
                                       <table style="direction: inherit; width: 100%; border-collapse: collapse;">
                                          <tr>
                                             <td colspan="2" style="text-align: center;  ">Springfield, UK<br/>Friday, 6th January, 2023</td>
                                          </tr>
                                          <tr >
                                             <td style="text-align: center; font-weight:700; font-size:18px;  ">Prayer</td>
                                             <td style="text-align: center; font-weight:700; font-size:18px; ">Time</td>
                                          </tr>
                                          <tr >
                                             <td style="text-align: left;  padding-left: 10px; text-align:center;">Fajr</td>
                                             <td style="text-align: left;  padding-left: 10px;text-align:center;"><input class="nobg" type="time" value="{{$prayer['data']['timings']['Fajr'] ?? ''}}"></td>
                                          </tr>
                                          <tr >
                                             <td style="text-align: left;  padding-left: 10px;text-align:center;">Sunrise</td>
                                             <td style="text-align: left;  padding-left: 10px;text-align:center;"><input class="nobg" type="time" value="{{$prayer['data']['timings']['Sunrise'] ?? ''}}"></td>
                                          </tr>
                                          <tr >
                                             <td style="text-align: left;  padding-left: 10px;text-align:center;">Dhuhr</td>
                                             <td style="text-align: left;  padding-left: 10px;text-align:center;"><input class="nobg" type="time" value="{{$prayer['data']['timings']['Dhuhr'] ?? ''}}"></td>
                                          </tr>
                                          <tr >
                                             <td style="text-align: left;  padding-left: 10px;text-align:center;">Asr</td>
                                             <td style="text-align: left;  padding-left: 10px;text-align:center;"><input class="nobg" type="time" value="{{$prayer['data']['timings']['Asr'] ?? ''}}"></td>
                                          </tr>
                                          <tr >
                                             <td style="text-align: left;  padding-left: 10px;text-align:center;">Magrib</td>
                                             <td style="text-align: left;  padding-left: 10px;text-align:center;"><input class="nobg" type="time" value="{{$prayer['data']['timings']['Maghrib'] ?? ''}}"></td>
                                          </tr>
                                          <tr >
                                             <td style="text-align: left;  padding-left: 10px;text-align:center;">Isha</td>
                                             <td style="text-align: left;  padding-left: 10px;text-align:center;"><input class="nobg" type="time" value="{{$prayer['data']['timings']['Isha'] ?? ''}}"></td>
                                          </tr>
                                       </table>
                                       <div class="wpb_text_column wpb_content_element  boederpadding" >
                                          <div class="wpb_wrapper">
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="wpb_column vc_column_container vc_col-sm-6 vc_col-has-fill sc_layouts_column_icons_position_left">
                                 <div class="vc_column-inner vc_custom_1631720132063">
                                    <div class="wpb_wrapper">
                                       <h2 style="font-size: 26px;color: #ffffff;text-align: center" class="vc_custom_heading" >{{$jamat->title ?? ''}}</h2>
                                       <h4 style="font-size: 16px;color: #ffffff;text-align: center" class="vc_custom_heading" >{{$jamat->sub_title ?? ''}}</h4>
                                       <div class="vc_empty_space"   style="height: 2em"><span class="vc_empty_space_inner"></span></div>
                                       <div class="sc_layouts sc_layouts_default sc_layouts_979 boederpadding">
                                          <div class="vc_row wpb_row vc_row-fluid">
                                             <div class="wpb_column vc_column_container vc_col-sm-12 sc_layouts_column_icons_position_left">
                                                <div class="vc_column-inner">
                                                   <div class="wpb_wrapper">
                                                      <div class="wpb_text_column wpb_content_element " >
                                                         <div class="wpb_wrapper">
                                                            <table class="table" width="100%">
                                                               <thead>
                                                                  <tr>
                                                                     <th>
                                                                        <h6><span style="color: #ffffff;">Prayer</span></h6>
                                                                     </th>
                                                                     <th>
                                                                        <h6><span style="color: #ffffff;">Weekdays</span></h6>
                                                                     </th>
                                                                     <th>
                                                                        <h6><span style="color: #ffffff;">Weekends</span></h6>
                                                                     </th>
                                                                  </tr>
                                                               </thead>
                                                               <tbody>
                                                                  <tr>
                                                                     <td style="text-align: center;"><b>Fajr</b></td>
                                                                     <td style="text-align: center;"><input class="nobg" type="time" value="{{$jamat->Fajr_weekdays ?? ''}}"></td>
                                                                     <td style="text-align: center;"><input class="nobg" type="time" value="{{$jamat->Fajr_weekends ?? ''}}"></td>
                                                                  </tr>
                                                                  <tr>
                                                                     <td style="text-align: center;"><b>Dhuhr</b></td>
                                                                     <td style="text-align: center;"><input class="nobg" type="time" value="{{$jamat->Dhuhr_weekdays ?? ''}}"></td>
                                                                     <td style="text-align: center;"><input class="nobg" type="time" value="{{$jamat->Dhuhr_weekends ?? ''}}"></td>
                                                                  </tr>
                                                                  <tr>
                                                                     <td style="text-align: center;"><b>Asr</b></td>
                                                                     <td style="text-align: center;"><input class="nobg" type="time" value="{{$jamat->Asr_weekdays ?? ''}}"></td>
                                                                     <td style="text-align: center;"><input class="nobg" type="time" value="{{$jamat->Asr_weekends ?? ''}}"></td>
                                                                  </tr>
                                                                  <tr>
                                                                     <td style="text-align: center;"><b>Magrib</b></td>
                                                                     <td style="text-align: center;"><b>{{$jamat->Magrib_weekdays ?? ''}}</b></td>
                                                                     <td style="text-align: center;"><b>{{$jamat->Magrib_weekends ?? ''}}</b></td>
                                                                  </tr>
                                                                  <tr>
                                                                     <td style="text-align: center;"><b>Isha</b></td>
                                                                     <td style="text-align: center;"><input class="nobg" type="time" value="{{$jamat->Isha_weekdays ?? ''}}"></td>
                                                                     <td style="text-align: center;"><input class="nobg" type="time" value="{{$jamat->Isha_weekends ?? ''}}"></td>
                                                                  </tr>
                                                                  <tr>
                                                                     <td style="text-align: center;"><b>Jummah</b></td>
                                                                     <td style="text-align: center;"><b>{{$jamat->Jummah_weekdays ?? ''}}</b></td>
                                                                     <td style="text-align: center;"><input class="nobg" type="time" value="{{$jamat->Jummah_weekends ?? ''}}"></td>
                                                                  </tr>
                                                               </tbody>
                                                            </table>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="vc_row-full-width vc_clearfix"></div>
                           <div class="vc_row wpb_row vc_row-fluid">
                              <div class="wpb_column vc_column_container vc_col-sm-12 sc_layouts_column_icons_position_left">
                                 <div class="vc_column-inner">
                                    <div class="wpb_wrapper">
                                       <div class="vc_empty_space"   style="height: 3em"><span class="vc_empty_space_inner"></span></div>
                                       <div class="vc_empty_space  hide_on_mobile hide_on_tablet"   style="height: 3.5em"><span class="vc_empty_space_inner"></span></div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="vc_row wpb_row vc_row-fluid">
                              <div class="wpb_column vc_column_container vc_col-sm-12 sc_layouts_column_icons_position_left">
                                 <div class="vc_column-inner">
                                    <div class="wpb_wrapper">
                                       <div id="sc_title_26924074"
                                          class="sc_title color_style_default sc_title_default">
                                          <h2 class="sc_item_title sc_title_title sc_align_center sc_item_title_style_default">Al-Noor Islamic Centre</h2>
                                          <div class="sc_item_descr sc_title_descr sc_align_center">
                                             <p>Many Skin Colors. One Ummah. No Racism in Islam</p>
                                          </div>
                                       </div>
                                       <!-- /.sc_title -->
                                       <div class="vc_empty_space"   style="height: 50px"><span class="vc_empty_space_inner"></span></div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="vc_row wpb_row vc_row-fluid">
                              <div class="wpb_column vc_column_container vc_col-sm-12 sc_layouts_column_icons_position_left">
                                 <div class="vc_column-inner">
                                    <div class="wpb_wrapper">
                                       <div class="vc_row wpb_row vc_inner vc_row-fluid">
                                          <div class="boederpadding wpb_column vc_column_container vc_col-sm-4 vc_col-has-fill sc_layouts_column_icons_position_left">
                                             <div class="vc_column-inner vc_custom_1631732800665">
                                                <div class="wpb_wrapper">
                                                   <div class="vc_empty_space"   style="height: 50px"><span class="vc_empty_space_inner"></span></div>
                                                   <div class="vc_icon_element vc_icon_element-outer vc_icon_element-align-center">
                                                      <div class="vc_icon_element-inner vc_icon_element-color-custom vc_icon_element-size-xl vc_icon_element-style- vc_icon_element-background-color-grey" ><span class="vc_icon_element-icon fas fa-hand-holding-heart" style="color:#0277d7 !important"></span></div>
                                                   </div>
                                                   <h2 style="font-size: 26px;color: #01365e;text-align: center" class="vc_custom_heading" >Our Values</h2>
                                                   <div class="wpb_text_column wpb_content_element  heightsb" >
                                                      <div class="wpb_wrapper">
                                                         <p style="text-align: center;">Truthfulness, Sincerity, Unselfishness, Humility, Patience, Forgiveness, Purity and Cleanliness, Honesty, Goodness and Kindness, Consideration and Respect</p>
                                                      </div>
                                                   </div>
                                                   <div class="vc_empty_space"   style="height: 2px"><span class="vc_empty_space_inner"></span></div>
                                                   <div class="vc_empty_space  heightsb"   style="height: 50px"><span class="vc_empty_space_inner"></span></div>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="boederpadding wpb_column vc_column_container vc_col-sm-4 vc_col-has-fill sc_layouts_column_icons_position_left">
                                             <div class="vc_column-inner vc_custom_1631732975832">
                                                <div class="wpb_wrapper">
                                                   <div class="vc_empty_space"   style="height: 50px"><span class="vc_empty_space_inner"></span></div>
                                                   <div class="vc_icon_element vc_icon_element-outer vc_icon_element-align-center">
                                                      <div class="vc_icon_element-inner vc_icon_element-color-custom vc_icon_element-size-xl vc_icon_element-style- vc_icon_element-background-color-grey" ><span class="vc_icon_element-icon far fa-eye" style="color:#0277d7 !important"></span></div>
                                                   </div>
                                                   <h2 style="font-size: 26px;color: #01365e;text-align: center" class="vc_custom_heading" >Our Vision</h2>
                                                   <div class="wpb_text_column wpb_content_element  heightsb" >
                                                      <div class="wpb_wrapper">
                                                         <p style="text-align: center;">A community to live in harmony with growing understanding, respect and love for each other to make this world a better place</p>
                                                      </div>
                                                   </div>
                                                   <div class="vc_empty_space"   style="height: 2px"><span class="vc_empty_space_inner"></span></div>
                                                   <div class="vc_empty_space  heightsb"   style="height: 50px"><span class="vc_empty_space_inner"></span></div>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="boederpadding wpb_column vc_column_container vc_col-sm-4 vc_col-has-fill sc_layouts_column_icons_position_left">
                                             <div class="vc_column-inner vc_custom_1631732984992">
                                                <div class="wpb_wrapper">
                                                   <div class="vc_empty_space"   style="height: 50px"><span class="vc_empty_space_inner"></span></div>
                                                   <div class="vc_icon_element vc_icon_element-outer vc_icon_element-align-center">
                                                      <div class="vc_icon_element-inner vc_icon_element-color-custom vc_icon_element-size-xl vc_icon_element-style- vc_icon_element-background-color-grey" ><span class="vc_icon_element-icon fas fa-paper-plane" style="color:#0277d7 !important"></span></div>
                                                   </div>
                                                   <h2 style="font-size: 26px;color: #01365e;text-align: center" class="vc_custom_heading" >Our Mission</h2>
                                                   <div class="wpb_text_column wpb_content_element  heightsb" >
                                                      <div class="wpb_wrapper">
                                                         <p style="text-align: center;">To unite and serve the Muslim and Non-Muslim communities in our area</p>
                                                      </div>
                                                   </div>
                                                   <div class="vc_empty_space"   style="height: 2px"><span class="vc_empty_space_inner"></span></div>
                                                   <div class="vc_empty_space  heightsb"   style="height: 50px"><span class="vc_empty_space_inner"></span></div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="vc_row wpb_row vc_row-fluid">
                              <div class="wpb_column vc_column_container vc_col-sm-12 sc_layouts_column_icons_position_left">
                                 <div class="vc_column-inner">
                                    <div class="wpb_wrapper">
                                       <div class="vc_empty_space"   style="height: 3em"><span class="vc_empty_space_inner"></span></div>
                                       <div class="vc_empty_space  hide_on_mobile hide_on_tablet"   style="height: 3.5em"><span class="vc_empty_space_inner"></span></div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="vc_row wpb_row vc_row-fluid">
                              <div class="wpb_column vc_column_container vc_col-sm-12 sc_layouts_column_icons_position_left">
                                 <div class="vc_column-inner">
                                    <div class="wpb_wrapper">
                                       <div id="sc_title_812190219"
                                          class="sc_title color_style_default sc_title_default">
                                          <h2 class="sc_item_title sc_title_title sc_align_center sc_item_title_style_default">Message from Trustees</h2>
                                       </div>
                                       <!-- /.sc_title -->
                                       <div class="vc_empty_space"   style="height: 50px"><span class="vc_empty_space_inner"></span></div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="vc_row wpb_row vc_row-fluid">
                              <div class="wpb_column vc_column_container vc_col-sm-12 sc_layouts_column_icons_position_left">
                                 <div class="vc_column-inner">
                                    <div class="wpb_wrapper">
                                       <div class="vc_row wpb_row vc_inner vc_row-fluid">
                                          <div class="wpb_column vc_column_container vc_col-sm-6 sc_layouts_column_icons_position_left">
                                             <div class="vc_column-inner">
                                                <div class="wpb_wrapper">
                                                   <div  class="wpb_single_image wpb_content_element vc_align_left  vc_custom_1631632757687">
                                                      <figure class="wpb_wrapper vc_figure">
                                                         <div class="vc_single_image-wrapper   vc_box_border_grey"><img width="512" height="512" src="wp-content/uploads/2021/09/about.png" class="vc_single_image-img attachment-full" alt="" decoding="async" loading="lazy"  sizes="(max-width: 512px) 100vw, 512px" /></div>
                                                      </figure>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="wpb_column vc_column_container vc_col-sm-6 sc_layouts_column_icons_position_left">
                                             <div class="vc_column-inner">
                                                <div class="wpb_wrapper">
                                                   <div class="vc_empty_space"   style="height: 50px"><span class="vc_empty_space_inner"></span></div>
                                                   <div class="wpb_text_column wpb_content_element " >
                                                      <div class="wpb_wrapper">
                                                         <p>As-salamu Alaykum,</p>
                                                         <p>The Messenger of Allah, peace and blessings be upon him, said,</p>
                                                         <p>“Whoever purifies himself with ablution in his house, then he walks to a house among the houses of Allah to fulfill an obligation among the obligations of Allah, one step of his will expiate his sins and another step will raise his status.” [Ṣaḥīḥ Muslim 666]</p>
                                                         <p>A warm welcome to you, we hope you find the information that you seek about our centre or services within this website. For any specific questions or suggestions please feel free to reach out to us.</p>
                                                         <p>Jazakallah Khair,</p>
                                                         <p>From On behalf of the Trust, the Trustees:</p>
                                                         <p>DR SHAFQAT ABRAR | DR SHAMAILLAH MUFTI | MR MUHAMMAD YASIN | DR FAWAD ASHRAF | DR SALEEM AJUMAL | MRS SHEREEN AJUMAL</p>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="vc_row wpb_row vc_row-fluid">
                              <div class="wpb_column vc_column_container vc_col-sm-12 sc_layouts_column_icons_position_left">
                                 <div class="vc_column-inner">
                                    <div class="wpb_wrapper">
                                       <div class="vc_empty_space"   style="height: 3em"><span class="vc_empty_space_inner"></span></div>
                                       <div class="vc_empty_space  hide_on_mobile hide_on_tablet"   style="height: 3.5em"><span class="vc_empty_space_inner"></span></div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div data-vc-full-width="true" data-vc-full-width-init="false" class="vc_row wpb_row vc_row-fluid titlebar vc_custom_1631719270969 vc_row-has-fill">
                              <div class="wpb_column vc_column_container vc_col-sm-12 sc_layouts_column_icons_position_left">
                                 <div class="vc_column-inner">
                                    <div class="wpb_wrapper">
                                       <div class="vc_empty_space  hide_on_mobile hide_on_tablet"   style="height: 4.2em"><span class="vc_empty_space_inner"></span></div>
                                       <div id="sc_content_1479420797"
                                          class="sc_content color_style_default sc_content_default sc_float_center sc_align_center">
                                          <div class="sc_content_container">
                                             <div  id="sc_action_568374706" 
                                                class="sc_action color_style_link2 sc_action_default">
                                                <div class="sc_action_content sc_item_content">
                                                   <div class="sc_action_item sc_action_item_default sc_action_item_mc">
                                                      <h3 class="sc_action_item_title"><span>Donate</span></h3>
                                                      <div class="sc_action_item_description"><span>The Messenger of Allah ﷺ said, “Verily, Allah is generous, and He loves generosity and exalted character.”</span></div>
                                                      <a href="donate/index.html" class="sc_action_item_link sc_button sc_button_size_large sc_button color_style_link2">Click here for Donate</a>
                                                   </div>
                                                </div>
                                             </div>
                                             <!-- /.sc_action -->
                                          </div>
                                       </div>
                                       <!-- /.sc_content -->
                                       <div class="vc_empty_space"   style="height: 2em"><span class="vc_empty_space_inner"></span></div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="vc_row-full-width vc_clearfix"></div>
                           <div data-vc-full-width="true" data-vc-full-width-init="false" data-vc-stretch-content="true" class="vc_row wpb_row vc_row-fluid vc_row-no-padding">
                              <div class="wpb_column vc_column_container vc_col-sm-12 sc_layouts_column_icons_position_left">
                                 <div class="vc_column-inner">
                                    <div class="wpb_wrapper">
                                       <div id="sc_googlemap_1997997610_wrap" class="sc_googlemap_wrap">
                                          <div id="sc_googlemap_1997997610"
                                             class="sc_googlemap sc_googlemap_default"
                                             style="width:100%;height:620px;"			data-zoom="13"
                                             data-style="dark"
                                             data-cluster-icon=""
                                             ><iframe
                                             src="https://maps.google.com/maps?t=m&amp;output=embed&amp;iwloc=near&amp;z=14&amp;q=mosque"
                                             scrolling="no"
                                             marginheight="0"
                                             marginwidth="0"
                                             frameborder="0"
                                             aria-label=""></iframe></div>
                                       </div>
                                       <!-- /.sc_googlemap_wrap -->
                                       <div class="vc_empty_space"   style="height: 2em"><span class="vc_empty_space_inner"></span></div>
                                       <div class="vc_empty_space"   style="height: 2em"><span class="vc_empty_space_inner"></span></div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="vc_row-full-width vc_clearfix"></div>
                        </div>
                        <!-- .entry-content -->
                     </article>
                  </div>
                  <!-- </.content> -->
               </div>
               <!-- </.content_wrap> -->			
            </div>
          

            @endsection