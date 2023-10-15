<?php
function woofusion_custom_styling()
{
  $custom_style    = '';

  $url = get_template_directory_uri();

  $custom_style .= "@font-face {
    font-family: Inter;
    src: url('$url/assets/webfonts/Inter-Regular.ttf');
  }";

  $custom_style .= "@font-face {
  font-family: Inter;
  src: url('$url/assets/webfonts/Inter-Regular.ttf');
  font-weight: normal;
  }";

  $custom_style .= "@font-face {
   font-family: Inter;
  src: url('$url/assets/webfonts/Inter-Bold.ttf');
  font-weight: bold;
  }";

 $custom_style .= "@font-face {
   font-family: Inter;
  src: url('$url/assets/webfonts/Inter-Medium.ttf');
  font-weight: 500;
 }";

  $custom_style .= "@font-face {
    font-family: Roboto;
    src: url('$url/assets/webfonts/Roboto-Italic.ttf');
    font-style: italic;
    font-weight: normal;
  }";

  $custom_style .= ".wfn-banner-area {
     background: url('$url/assets/images/banner-bg.svg');
      }";
  $custom_style .= ".wfn-banner-top h1::after {
        background: url('$url/assets/images/banner-after-img1.png');
      }";
  $custom_style .= ".why-woofusion h2:after {
        content: url('$url/assets/images/woofusion-after-img.png');
      }";
  $custom_style .= ".testimonial::after {
        background: url('$url/assets/images/testimonial-shape.png');
      }";
  $custom_style .= ".modules-header h2:after {
        content: url('$url/assets/images/modules-header-img.png');
      }";
  $custom_style .= ".supercharge:after {
        background: url('$url/assets/images/footer-top-shape.png');
      }";
  $custom_style .= ".all-modules-banner h1::after {
        background-image: url('$url/assets/images/all-module-banner.png');
      }
      ";
  $custom_style .= ".super-charge:after {
        background: url('$url/assets/images/footer-top-shape.png');
      }";
  $custom_style .= ".single-banner-area h1::after {
        background-image: url('$url/assets/images/single-module-banner-after.png');
      }";
  $custom_style .= ".modules-header h2::after {
        content: url('$url/assets/images/single-modules-header-img.png');
      }";
  $custom_style .= ".after-img::after {
        background-image: url('$url/assets/images/single-module-supercharge.png');
    }";

  $custom_style .= ".accordion-button::after{
     background-image: url('$url/assets/images/chevron-down-solid.svg');
  }";

  $custom_style .= ".accordion-button:not(.collapsed)::after{
     background-image: url('$url/assets/images/chevron-down-solid.svg');
  }";
  
  $custom_style .= ".accordion-button:not(.collapsed)::after{
     background-image: url('$url/assets/images/chevron-down-solid.svg');
  }";


  

  $custom_style .= "";
  $custom_style .= "";
  $custom_style .= "";
  $custom_style .= "";


  wp_register_style('woofusion-stylesheet', false);
  wp_enqueue_style('woofusion-stylesheet', false);
  wp_add_inline_style('woofusion-stylesheet', $custom_style, true);
}

add_action('wp_enqueue_scripts', 'woofusion_custom_styling');
