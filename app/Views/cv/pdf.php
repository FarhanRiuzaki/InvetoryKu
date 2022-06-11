<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>

<head>

    <title>CV-<?= $cv['name'] ?>-<?= $cv['email'] ?>-<?= $cv['phone'] ?></title>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />

    <meta name="keywords" content="" />
    <meta name="description" content="" />

    <link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/2.7.0/build/reset-fonts-grids/reset-fonts-grids.css" media="all" />
    <!-- <link rel="stylesheet" type="text/css" href="resume.css" media="all" /> -->
    <style>
        .msg {
            padding: 10px;
            background: #222;
            position: relative;
        }

        .msg h1 {
            color: #fff;
        }

        .msg a {
            margin-left: 20px;
            background: #408814;
            color: white;
            padding: 4px 8px;
            text-decoration: none;
        }

        .msg a:hover {
            background: #266400;
        }

        /* //-- yui-grids style overrides -- */
        body {
            font-family: Georgia;
            color: #444;
            padding: 0 !important;
            margin: 0 !important;
        }

        #inner {
            padding: 10px 80px;
            margin: 0px;
            background: #f5f5f5;
            border: solid #666;
            border-width: 8px 0 2px 0;
        }

        .yui-gf {
            margin-bottom: 2em;
            padding-bottom: 2em;
            border-bottom: 1px solid #ccc;
        }

        /* //-- header, body, footer -- */
        #hd {
            margin: 2.5em 0 3em 0;
            padding-bottom: 1.5em;
            border-bottom: 1px solid #ccc
        }

        #hd h2 {
            text-transform: uppercase;
            letter-spacing: 2px;
        }

        #bd,
        #ft {
            margin-bottom: 2em;
        }

        /* //-- footer -- */
        #ft {
            padding: 1em 0 5em 0;
            font-size: 92%;
            border-top: 1px solid #ccc;
            text-align: center;
        }

        #ft p {
            margin-bottom: 0;
            text-align: center;
        }

        /* //-- core typography and style -- */
        #hd h1 {
            font-size: 48px;
            text-transform: uppercase;
            letter-spacing: 3px;
        }

        h2 {
            font-size: 152%
        }

        h3,
        h4 {
            font-size: 122%;
        }

        h1,
        h2,
        h3,
        h4 {
            color: #333;
        }

        p {
            font-size: 100%;
            line-height: 18px;
            padding-right: 3em;
        }

        a {
            color: #990003
        }

        a:hover {
            text-decoration: none;
        }

        strong {
            font-weight: bold;
        }

        li {
            line-height: 24px;
            border-bottom: 1px solid #ccc;
        }

        p.enlarge {
            font-size: 113%;
            padding-right: 6.5em;
            line-height: 24px;
        }

        p.enlarge span {
            color: #000
        }

        .contact-info {
            margin-top: 7px;
        }

        .first h2 {
            font-style: italic;
        }

        .last {
            border-bottom: 0
        }


        /* //-- section styles -- */

        a#pdf {
            display: block;
            float: left;
            background: #666;
            color: white;
            padding: 6px 50px 6px 12px;
            margin-bottom: 6px;
            text-decoration: none;
        }

        a#pdf:hover {
            background: #222;
        }

        .job {
            position: relative;
            margin-bottom: 1em;
            padding-bottom: 1em;
            border-bottom: 1px solid #ccc;
        }

        .job h4 {
            position: absolute;
            top: 0.35em;
            right: 0
        }

        .job p {
            margin: 0.75em 0 3em 0;
        }

        .last {
            border: none;
        }

        .skills-list {}

        .skills-list ul {
            margin: 0;
        }

        .skills-list li {
            margin: 3px 0;
            padding: 3px 0;
        }

        .skills-list li span {
            font-size: 152%;
            display: block;
            margin-bottom: -2px;
            padding: 0
        }

        .talent {
            width: 32%;
            float: left
        }

        .talent h2 {
            margin-bottom: 6px;
        }

        #srt-ttab {
            margin-bottom: 100px;
            text-align: center;
        }

        #srt-ttab img.last {
            margin-top: 20px
        }

        /* --// override to force 1/8th width grids -- */
        .yui-gf .yui-u {
            width: 80.2%;
        }

        .yui-gf div.first {
            width: 12.3%;
        }

        @media print {
            .bodys {
                page-break-after: always;
            }
        }
    </style>

</head>

<body class="bodys" onload="script();">

    <div id="doc2" class="yui-t7">
        <div id="inner">

            <div id="hd">
                <div class="yui-gc">
                    <div class="yui-u first">
                        <h2><?= $cv['name'] ?></h2>
                        <h3><?= $cv['title'] ?></h3>
                    </div>

                    <div class="yui-u">
                        <div class="contact-info">
                            <!-- <h3><a id="pdf" href="#">Download PDF</a></h3> -->
                            <h3><a href="mailto:<?= $cv['email'] ?>"><?= $cv['email'] ?></a></h3>
                            <h3><?= $cv['phone'] ?></h3>
                        </div>
                        <!--// .contact-info -->
                    </div>
                </div>
                <!--// .yui-gc -->
            </div>
            <!--// hd -->

            <div id="bd">
                <div id="yui-main">
                    <div class="yui-b">

                        <div class="yui-gf">
                            <div class="yui-u first">
                                <h2>Profile</h2>
                            </div>
                            <div class="yui-u">
                                <p class="enlarge">
                                    <?= $cv['description'] ?>
                                </p>
                            </div>
                        </div>

                        <div class="yui-gf">
                            <div class="yui-u first">
                                <h2>Technical & Skills</h2>
                            </div>
                            <div class="yui-u break">
                                <?php foreach ($skill as $key => $val) : ?>
                                    <ul class="talent">
                                        <li><?= $val['name'] ?></li>
                                    </ul>
                                <?php endforeach; ?>

                            </div>
                        </div>
                        <!--// .yui-gf-->

                        <div class="yui-gf">

                            <div class="yui-u first">
                                <h2>Experience</h2>
                            </div>
                            <!--// .yui-u -->

                            <div class="yui-u">
                                <?php foreach ($experience as $key => $val) : ?>
                                    <div class="job">
                                        <h2><?= $val['company_name'] ?></h2>
                                        <h3><?= $val['title'] ?></h3>
                                        <h4><?= date('Y/m', strtotime($val['start_date'])) . '-' . date('Y/m', strtotime($val['end_date'])) ?></h4>
                                        <p><?= $val['description'] ?></p>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                            <!--// .yui-u -->
                        </div>
                        <!--// .yui-gf -->


                        <div class="yui-gf last">
                            <div class="yui-u first">
                                <h2>Education</h2>
                            </div>
                            <?php foreach ($education as $key => $val) : ?>
                                <div class="yui-u">
                                    <h2><?= $val['name'] ?> &mdash; <?= date('Y', strtotime($val['start_date'])) . '-' . date('Y', strtotime($val['end_date'])) ?></h2>
                                    <h3><?= $val['title'] ?></h3>
                                    <br>
                                </div>
                            <?php endforeach; ?>
                        </div>
                        <!--// .yui-gf -->


                    </div>
                    <!--// .yui-b -->
                </div>
                <!--// yui-main -->
            </div>
            <!--// bd -->

            <div id="ft">
                <p><?= $cv['name'] ?> &mdash; <a href="mailto:<?= $cv['email'] ?>"><?= $cv['email'] ?></a> &mdash; <?= $cv['phone'] ?></p>
            </div>
            <!--// footer -->
        </div><!-- // inner -->
    </div>
    <!--// doc -->
</body>
<script>
    window.onload = function() {
        window.print();
    }
</script>

</html>