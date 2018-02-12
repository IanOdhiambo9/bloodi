<?php
header("Access-Control-Allow-Origin: *");
$data = '{
    "posts": [
      {
        "thread": {
          "uuid": "d9f9368d0dae9315d297cf81bdd10ca770d20195",
          "url": "http://omgili.com/ri/jHIAmI4hxg8vW430iIIhkfFvVO6_Sl5rAiTVWhclUtPyvTxCxUlA59K.wvmC.1YKc7ihmo6tZWDnFRGxXMfRLzBecVkf7p7WnDkLlPUqOCTtExun8U5Omz.BdounhhbK9YptqtLOGZ0-",
          "site_full": "wcfcourier.com",
          "site": "wcfcourier.com",
          "site_section": "http://wcfcourier.com/search/?f=rss&t=article&c=news/local&l=25&s=start_time&sd=desc",
          "site_categories": [
            "media"
          ],
          "section_title": "wcfcourier.com - RSS Results in news/local of type article",
          "title": "Community Briefs",
          "title_full": "Community Briefs",
          "published": "2018-02-09T08:00:00.000+02:00",
          "replies_count": 0,
          "participants_count": 0,
          "site_type": "news",
          "country": "US",
          "spam_score": 0.0,
          "main_image": "https://bloximages.chicago2.vip.townnews.com/wcfcourier.com/content/tncms/assets/v3/editorial/6/ba/6ba9dcca-1e0c-5749-a402-4dd1db4f2291/5a70ef93b656c.image.jpg?crop=546%2C307%2C0%2C62&amp;resize=546%2C307&amp;order=crop%2Cresize",
          "performance_score": 0,
          "domain_rank": 86289,
          "social": {
            "facebook": {
              "likes": 0,
              "comments": 0,
              "shares": 0
            },
            "gplus": {
              "shares": 0
            },
            "pinterest": {
              "shares": 0
            },
            "linkedin": {
              "shares": 0
            },
            "stumbledupon": {
              "shares": 0
            },
            "vk": {
              "shares": 0
            }
          }
        }
      }
    ]
  }';

  echo json_encode($data);