    <style>
      .main article {
        width: 100%;
      }
      .rslides.wrapper {
        display: none;
      }
      .pattern {
        margin-top:4em;
      }
      details.primer {
        border: 1px dashed rgb(210,210,210);
        border-top: 0;
        clear: both;
        margin-top: 2.5em;
        position: relative;
        width: 100%;
      }
      details.primer summary {
        box-sizing: border-box;
        font-size: .8em;
        line-height: 1;
        padding: 0.5em;
        overflow: hidden;
        text-align: right;
        }
        details.primer summary::-webkit-details-marker {
          display: none;
        }
      details.primer section {
        display: none;
        font-size: 1.3em;
        height: 220px;
        padding: 1.5%;
        overflow: hidden;
        text-align: left;
      }
      details.primer summary:hover section {
        display: block;
      }
      details.primer summary section:hover {
        display: block;
      }
      details.primer p.caption {
        margin-left: 0;
        margin-bottom: 0;
      }
      @media screen and (min-width:40em) {
        details.primer textarea {
          width: 58%;
          float: left;
        }
        details.primer p.caption {
          width: 38%;
          float: right;
        }
      }
    </style>

        <nav role="navigation" class="breadcrumb-nav">
          <a href="/">Home</a> /
          <a href="/styleguide">Style Guide</a> /
        </nav><!--/.breadcrumb-nav-->
        <h1>Pattern Library</h1>
        <p class="lede">Common snippets of markup</p>

        <article>
          <?php
            $count = 1;
            $files = array();
            $patterns_dir = "_patterns";
            $handle = opendir($patterns_dir);
            while (false !== ($file = readdir($handle))):
                    if(stristr($file,'.html')):
                            $files[] = $file;
                    endif;
            endwhile;
            sort($files);
            foreach ($files as $file):
                    echo '<section class="pattern">';
                    include($patterns_dir.'/'.$file);
                    echo '<details class="primer">';
                    echo '<summary title="Show markup and usage">Get the code';
                    echo '<section>';
                    echo '<textarea rows="10" cols="30" class="input code">'.htmlspecialchars(file_get_contents($patterns_dir.'/'.$file)).'</textarea>';
                    echo '<p class="caption"><strong>Usage:</strong> '.htmlspecialchars(@file_get_contents($patterns_dir.'/'.str_replace('.html','.txt',$file))).'</p>';
                    echo '</section></summary>';
                    echo '</details><!--/.primer-->';
                    echo '</section><!--/.pattern-->';
            endforeach;
          ?>

          <p style="margin-top: 5em; text-align: center;"><small>Copyright &#169; 2013 <a href="http://paulrobertlloyd.com">Paul Robert Lloyd</a>. Code covered by the <a rel="license" href="http://paulrobertlloyd.mit-license.org/">MIT license</a>.</small></p>
        </article>
