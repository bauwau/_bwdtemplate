        <style>
          .main article {
          width: 100%;
          }
          .rslides.wrapper {
            display: none;
          }
          code {
            color: rgb(200,70,70);
          }
        </style>
        <nav role="navigation" class="breadcrumb-nav">
          <a href="/">Home</a> /
          <a href="/styleguide">Style Guide</a> /
        </nav><!--/.breadcrumb-nav-->
        <h1>Form Example</h1>
        <p class="lede">Basic form styles</p>

        <article>
          <p>The <code>fieldset</code> element enables you to group related fields within a form, and each one should contain a corresponding <code>legend</code>. The <code>label</code> element ensures field descriptions are associated with their corresponding form widgets.</p>

          <fieldset>
            <legend>Legend</legend>
            <p><small class="caption">Required fields are marked <abbr title="Required">*</abbr></small></p>
            <?php include('_patterns/form-input.text.html'); ?>
            <?php include('_patterns/form-input.password.html'); ?>
            <?php include('_patterns/form-input.email.html'); ?>
            <?php include('_patterns/form-input.url.html'); ?>
            <?php include('_patterns/form-select.html'); ?>
            <?php include('_patterns/form-options.checkboxes.html'); ?>
            <?php include('_patterns/form-options.radios.html'); ?>
            <?php include('_patterns/form-textarea.html'); ?>
            <?php include('_patterns/form-input.checkbox.html'); ?>
            <?php include('_patterns/form-buttongroup.html'); ?>
          </fieldset>
          <p style="margin-top: 5em; text-align: center;"><small>Copyright &#169; 2013 <a href="http://paulrobertlloyd.com">Paul Robert Lloyd</a>. Code covered by the <a rel="license" href="http://paulrobertlloyd.mit-license.org/">MIT license</a>.</small></p>
        </article>
