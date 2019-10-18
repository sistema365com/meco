<?php

use app\assets\admin\component\TypographyAsset;

TypographyAsset::register($this);

$this->title = 'TYPOGRAPHY | BLANKON - Fullpack Admin Theme';

?>



<section id="page-content">

    <!-- Start page header -->
    <div class="header-content">
        <h2><i class="fa fa-text-height"></i> Typography <span>general ui components</span></h2>
        <div class="breadcrumb-wrapper hidden-xs">
            <span class="label">You are here:</span>
            <ol class="breadcrumb">
                <li>
                    <i class="fa fa-home"></i>
                    <a href="<?= Yii::$app->getUrlManager()->createUrl('admin/dashboard/index') ?>">Dashboard</a>
                    <i class="fa fa-angle-right"></i>
                </li>
                <li>
                    <a href="#">Components</a>
                    <i class="fa fa-angle-right"></i>
                </li>
                <li class="active">Typography</li>
            </ol>
        </div><!-- /.breadcrumb-wrapper -->
    </div><!-- /.header-content -->
    <!--/ End page header -->

    <!-- Start body content -->
    <div class="body-content animated fadeIn">

    <div class="row">
        <div class="col-md-12">

            <!-- Start headings -->
            <h4>Headings</h4>
            <p>All HTML headings, <code>&lt;h1&gt;</code> through <code>&lt;h6&gt;</code>, are available. <code>.h1</code> through <code>.h6</code> classes are also available, for when you want to match the font styling of a heading but still want your text to be displayed inline. Create lighter, secondary text in any heading with a generic <code>&lt;small&gt;</code> tag or the <code>.small</code> class.</p>
            <div class="panel rounded shadow">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="text-center">
                                <h1>h1. Bootstrap heading <span class="label label-info">36px</span></h1>
                                <h2>h2. Bootstrap heading <span class="label label-info">30px</span></h2>
                                <h3>h3. Bootstrap heading <span class="label label-info">24px</span></h3>
                                <h4>h4. Bootstrap heading <span class="label label-info">18px</span></h4>
                                <h5>h5. Bootstrap heading <span class="label label-info">14px</span></h5>
                                <h6>h6. Bootstrap heading <span class="label label-info">12px</span></h6>
                            </div>

                        </div>
                        <div class="col-md-6">
                            <div class="text-center">
                                <h1>h1. Bootstrap heading <small>Secondary text</small></h1>
                                <h2>h2. Bootstrap heading <small>Secondary text</small></h2>
                                <h3>h3. Bootstrap heading <small>Secondary text</small></h3>
                                <h4>h4. Bootstrap heading <small>Secondary text</small></h4>
                                <h5>h5. Bootstrap heading <small>Secondary text</small></h5>
                                <h6>h6. Bootstrap heading <small>Secondary text</small></h6>
                            </div>
                        </div>
                    </div>
                </div><!-- /.panel-body -->
            </div><!-- /.panel -->
            <!--/ End eadings -->

        </div>
    </div><!-- /.row -->
    <div class="row">
        <div class="col-md-6">

            <!-- Start body copy -->
            <h4>Body copy</h4>
            <p>Bootstrap's global default <code>font-size</code> is <strong>14px</strong>, with a <code>line-height</code> of <strong>1.428</strong>. This is applied to the <code>&lt;body&gt;</code> and all paragraphs. In addition, <code>&lt;p&gt;</code> (paragraphs) receive a bottom margin of half their computed line-height (10px by default). Make a paragraph stand out by adding <code>.lead</code>.</p>
            <div class="panel rounded shadow">
                <div class="panel-body">
                    <p>
                        Nullam quis risus eget urna mollis ornare vel eu leo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nullam id dolor id nibh ultricies vehicula.
                    </p>
                    <p>
                        Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec ullamcorper nulla non metus auctor fringilla. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Donec ullamcorper nulla non metus auctor fringilla.
                    </p>
                    <p>
                        Maecenas sed diam eget risus varius blandit sit amet non magna. Donec id elit non mi porta gravida at eget metus. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.
                    </p>
                </div><!-- /.panel-body -->
            </div><!-- /.panel -->
            <!--/ End body copy -->

        </div>
        <div class="col-md-6">

            <!-- Start emphasis -->
            <h4>Emphasis</h4>
            <p class="text-muted">Make use of HTML's default emphasis tags with lightweight styles.</p>
            <div class="panel rounded shadow">
                <div class="panel-body">
                    <small>Lorem ipsum dolor sit amet, consectetur adipisicing elit</small>, sed do eiusmod tempor incididunt ut <strong>labore et dolore magna aliqua</strong>. Ut enim ad minim veniam, <em>quis nostrud exercitation ullamco</em> laboris nisi ut <b>aliquip</b> ex ea commodo <i>consequat</i>.
                </div>
            </div><!-- /.panel -->
            <!--/ End emphasis -->

            <!-- Start alignment classes -->
            <h4>Alignment classes</h4>
            <p class="text-muted">Easily realign text to components with text alignment classes.</p>
            <div class="panel rounded shadow">
                <div class="panel-body">
                    <p class="text-left">Left aligned text.</p>
                    <p class="text-center">Center aligned text.</p>
                    <p class="text-right">Right aligned text.</p>
                    <p class="text-justify">Justified text.</p>
                </div><!-- /.panel-body -->
            </div><!-- /.panel -->
            <!--/ End alignment classes -->

        </div>
    </div><!-- /.row -->
    <div class="row">
        <div class="col-md-6">

            <!-- Start contextual classes -->
            <h4>Contextual Classes</h4>
            <div class="panel rounded shadow">
                <div class="panel-body">
                    <p class="text-muted"><code>.text-muted</code> : Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    <p class="text-primary"><code>.text-primary</code> : Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    <p class="text-success"><code>.text-success</code> : Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    <p class="text-info"><code>.text-info</code> : Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    <p class="text-danger"><code>.text-danger</code> : Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    <p class="text-warning"><code>.text-warning</code> : Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    <p class="text-lilac"><code>.text-lilac</code> : Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    <p class="text-teal"><code>.text-teals</code> : Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    <p class="text-inverse"><code>.text-inverse</code> : Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                </div><!-- /.panel-body -->
            </div><!-- /.panel -->
            <!--/ End contextual classes -->

        </div>
        <div class="col-md-6">

            <!-- Start code prettify -->
            <h4>Code prettify</h4>
            <p>The prettyprinter looks for <code>pre</code>, <code>code</code>, or <code>xmp</code> elements with the prettyprint class</p>
            <div class="panel rounded shadow">
                <div class="panel-body">
<pre class="prettyprint linenums lang-html no-margin">
&lt;!DOCTYPE html&gt;
&lt;html&gt;
&lt;head&gt;
&lt;title&gt;Typography | Blankon 1.0.0&lt;/title&gt;
&lt;/head&gt;
&lt;body&gt;
&lt;h1&gt;Hello, World!&lt;/h1&gt;
&lt;/body&gt;
&lt;/html&gt;
</pre>
                </div><!-- /.panel-body -->
            </div><!-- /.panel -->
            <!--/ End code prettify -->

        </div>
    </div><!-- /.row -->
    <div class="row">
        <div class="col-md-6">

            <!-- Start blockquotes -->
            <h4>Blockquotes</h4>
            <p class="text-muted">For quoting blocks of content from another source within your document.</p>
            <div class="panel rounded shadow">
                <div class="panel-body">

                    <blockquote>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                    </blockquote>

                    <blockquote>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                        <footer>Someone famous in <cite title="Source Title">Source Title</cite></footer>
                    </blockquote>

                    <blockquote class="blockquote-reverse">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                    </blockquote>

                </div><!-- /.panel-body -->
            </div><!-- /.panel -->
            <!--/ End blockquotes -->

        </div>
        <div class="col-md-6">

            <!-- Start addresses -->
            <h4>Addresses</h4>
            <p class="text-muted">Present contact information for the nearest ancestor or the entire body of work. Preserve formatting by ending all lines with <code>&lt;br&gt;</code>.</p>
            <div class="panel rounded shadow">
                <div class="panel-body">
                    <address>
                        <strong>Twitter, Inc.</strong><br>
                        795 Folsom Ave, Suite 600<br>
                        San Francisco, CA 94107<br>
                        <abbr title="Phone">P:</abbr> (123) 456-7890
                    </address>

                    <address>
                        <strong>Full Name</strong><br>
                        <a href="mailto:#">first.last@example.com</a>
                    </address>
                </div><!-- /.panel-body -->
            </div><!-- /.panel -->
            <!--/ End addresses -->

        </div>
    </div><!-- /.row -->
    <div class="row">
        <div class="col-md-12">

            <!-- Start lists -->
            <div class="panel rounded shadow">
                <div class="panel-heading">
                    <div class="pull-left">
                        <h3 class="panel-title">Lists</h3>
                    </div>
                    <div class="pull-right">
                        <button class="btn btn-sm" data-action="collapse" data-container="body" data-toggle="tooltip" data-placement="top" data-title="Collapse"><i class="fa fa-angle-up"></i></button>
                        <button class="btn btn-sm" data-action="remove" data-container="body" data-toggle="tooltip" data-placement="top" data-title="Remove"><i class="fa fa-times"></i></button>
                    </div>
                    <div class="clearfix"></div>
                </div><!-- /.panel-heading -->
                <div class="panel-body">

                    <div class="row">
                        <div class="col-md-4">

                            <!-- Start lists ordered -->
                            <div class="sample-wrapper">
                                <h4>Unordered</h4>
                                <p>A list of items in which the order does <em>not</em> explicitly matter.</p>
                                <ol>
                                    <li>Lorem ipsum dolor sit amet</li>
                                    <li>Consectetur adipiscing elit</li>
                                    <li>Integer molestie lorem at massa</li>
                                    <li>Facilisis in pretium nisl aliquet</li>
                                    <li>Nulla volutpat aliquam velit
                                        <ul>
                                            <li>Phasellus iaculis neque</li>
                                            <li>Purus sodales ultricies</li>
                                            <li>Vestibulum laoreet porttitor sem</li>
                                            <li>Ac tristique libero volutpat at</li>
                                        </ul>
                                    </li>
                                    <li>Faucibus porta lacus fringilla vel</li>
                                    <li>Aenean sit amet erat nunc</li>
                                    <li>Eget porttitor lorem</li>
                                </ol>
                            </div>
                            <!--/ End List ordered -->

                        </div>
                        <div class="col-md-4">

                            <!-- Start Lists unordered -->
                            <div class="sample-wrapper">
                                <h4>Ordered</h4>
                                <p>A list of items in which the order <em>does</em> explicitly matter.</p>
                                <ul>
                                    <li>Lorem ipsum dolor sit amet</li>
                                    <li>Consectetur adipiscing elit</li>
                                    <li>Integer molestie lorem at massa</li>
                                    <li>Facilisis in pretium nisl aliquet</li>
                                    <li>Nulla volutpat aliquam velit
                                        <ul>
                                            <li>Phasellus iaculis neque</li>
                                            <li>Purus sodales ultricies</li>
                                            <li>Vestibulum laoreet porttitor sem</li>
                                            <li>Ac tristique libero volutpat at</li>
                                        </ul>
                                    </li>
                                    <li>Faucibus porta lacus fringilla vel</li>
                                    <li>Aenean sit amet erat nunc</li>
                                    <li>Eget porttitor lorem</li>
                                </ul>
                            </div>
                            <!--/ End List unordered -->

                        </div>
                        <div class="col-md-4">

                            <!-- Start Lists unstyled -->
                            <div class="sample-wrapper">
                                <h4>Unstyled</h4>
                                <p>Remove the default <code>list-style</code> and left margin on list items (immediate children only). <strong>This only applies to immediate children list items</strong>, meaning you will need to add the class for any nested lists as well.</p>
                                <ul class="list-unstyled">
                                    <li>Lorem ipsum dolor sit amet</li>
                                    <li>Consectetur adipiscing elit</li>
                                    <li>Integer molestie lorem at massa</li>
                                    <li>Facilisis in pretium nisl aliquet</li>
                                    <li>Nulla volutpat aliquam velit
                                        <ul>
                                            <li>Phasellus iaculis neque</li>
                                            <li>Purus sodales ultricies</li>
                                            <li>Vestibulum laoreet porttitor sem</li>
                                            <li>Ac tristique libero volutpat at</li>
                                        </ul>
                                    </li>
                                    <li>Faucibus porta lacus fringilla vel</li>
                                    <li>Aenean sit amet erat nunc</li>
                                    <li>Eget porttitor lorem</li>
                                </ul>
                            </div>
                            <!--/ End List unstyled -->

                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">

                            <!-- Start Lists Description -->
                            <div class="sample-wrapper">
                                <h4>Description</h4>
                                <p>A list of terms with their associated descriptions.</p>
                                <dl>
                                    <dt>Description lists</dt>
                                    <dd>A description list is perfect for defining terms.</dd>
                                    <dt>Euismod</dt>
                                    <dd>Vestibulum id ligula porta felis euismod semper eget lacinia odio sem nec elit.</dd>
                                    <dd>Donec id elit non mi porta gravida at eget metus.</dd>
                                    <dt>Malesuada porta</dt>
                                    <dd>Etiam porta sem malesuada magna mollis euismod.</dd>
                                </dl>
                            </div>
                            <!--/ End List Description -->

                            <br/>

                            <!-- Start lists inline -->
                            <div class="sample-wrapper">
                                <h4>Inline</h4>
                                <p>Place all list items on a single line with <code>display: inline-block;</code> and some light padding.</p>
                                <ul class="list-inline">
                                    <li>Lorem ipsum</li>
                                    <li>Phasellus iaculis</li>
                                    <li>Nulla volutpat</li>
                                </ul>
                            </div>
                            <!--/ End List inline -->

                        </div>
                        <div class="col-md-6">

                            <!-- Start Lists Horizontal description -->
                            <div class="sample-wrapper">
                                <h4>Horizontal description</h4>
                                <p>Make terms and descriptions in <code>&lt;dl&gt;</code> line up side-by-side. Starts off stacked like default <code>&lt;dl&gt;</code>s, but when the navbar expands, so do these.</p>
                                <dl class="dl-horizontal">
                                    <dt>Description lists</dt>
                                    <dd>A description list is perfect for defining terms.</dd>
                                    <dt>Euismod</dt>
                                    <dd>Vestibulum id ligula porta felis euismod semper eget lacinia odio sem nec elit.</dd>
                                    <dd>Donec id elit non mi porta gravida at eget metus.</dd>
                                    <dt>Malesuada porta</dt>
                                    <dd>Etiam porta sem malesuada magna mollis euismod.</dd>
                                    <dt>Felis euismod semper eget lacinia</dt>
                                    <dd>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</dd>
                                </dl>
                            </div>
                            <!--/ End List Horizontal description -->

                        </div>
                    </div>

                </div><!-- /.panel-body -->
            </div><!-- /.panel -->
            <!--/ End lists -->

        </div>
    </div><!-- /.row -->

    </div><!-- /.body-content -->
    <!--/ End body content -->

    <!-- Start footer content -->
    <?php echo $this->render('/shares/_footer_admin') ;?>
    <!--/ End footer content -->

</section><!-- /#page-content -->
