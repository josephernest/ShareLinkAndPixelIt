ShareLinkAndPixelIt
===================

## What is it about?

You want to share a link to some great external content (i.e., that you don't own) on your Facebook page, let's say http://sitetoshare.com/coolarticle17.
People clicking on this website will be ... lost! This is sad because these people are probably interested by the topic you're posting about, and could be potential customers for your page/business! Indeed, they are **good candidates** for a high conversion rate retargeting campaign.

It would be wonderful if people clicking on these links could visit *your famous Facebook pixel* very shortly before visiting the actual link. Then we could build a **retargeting campaign** based on this audience!

This is the task performed by **ShareLinkAndPixelIt**.


## How to install?

1. Copy `re.php` at the root of your website, http://example.com

2. Insert your Facebook Pixel ID on line 2 of `re.php` (your Pixel ID can be found in your [FB Ads Manager](https://www.facebook.com/ads/manager/pixel/facebook_pixel/)).

3. Let's say you want to share a link to http://sitetoshare.com/coolarticle17 on Facebook. Just share this link

    http://example.com/re.php?url=http://sitetoshare.com/coolarticle17
    
It will be displayed on Facebook as if you shared the original link directly, but there's a huge benefit: by clicking on this link, your Facebook Pixel will track this visit. Then it can be used for a **retargeting campaign**.

## Improvement

Add this is `.htaccess` to have even prettier URL links:

    RewriteRule ^r$ re.php [L]
    
Then the link can be:

    http://example.com/r?url=http://sitetoshare.com/coolarticle17
