<?php
  Webhose::config("67930d45-1bef-4630-8835-a53d77fc99b2");

    
//Helper method to print result:

    function print_filterwebdata_titles($api_response)
    {
        if($api_response == null)
        {
            echo "<p>Response is null, no action taken.</p>";
            return;
        }
        if(isset($api_response->posts))
            foreach($api_response->posts as $post)
            {
                echo "<p>" . $post->title . "</p>";
            }
    }

    
//Perform a "filterWebContent" query

    $params = array(
	"q" => "Blood Donation language:english site_type:news",
	"sort" => "crawled"
    );
    $result = Webhose::query("filterWebContent", $params);
    print_filterwebdata_titles($result);