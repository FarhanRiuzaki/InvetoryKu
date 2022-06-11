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
        /* //-- yui-grids style overrides -- */
        body {
            font-family: Georgia;
            color: #444;
            padding: 0 !important;
            margin: 0 !important;
        }


        #bd,
        #ft {
            margin-bottom: 1em;
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


        .table td {
            margin: 0px;
            padding: 0px !important;
        }

        ul {
            list-style-type: none;
            margin-left: -40px;
        }
    </style>

</head>

<body class="bodys" onload="script();">
    <table style="width: 100%" class="table">
        <tr>
            <td width="75%">
                <b><i style="font-size: 24px; letter-spacing: 1px;"><?= strtoupper($cv['name']) ?></i></b>
            </td>
            <td><a href="mailto:<?= $cv['email'] ?>"><?= $cv['email'] ?></a></td>
        </tr>
        <tr>
            <td>
                <b style="font-size: 18px;"><?= $cv['title'] ?></b>
            </td>
            <td><?= $cv['phone'] ?></td>
        </tr>
    </table>
    <br>
    <hr>
    <br>
    <table style="width: 100%" class="table">
        <tr>
            <td width="150px; vertical-align: top">
                <b><i style="font-size: 20px; letter-spacing: 1px;">Profile</i></b>
            </td>
            <td>
                <?= $cv['description'] ?>
            </td>
        </tr>
    </table>
    <br>
    <hr>
    <br>
    <table style="width: 100%" class="table">
        <tr>
            <td width="150px; vertical-align: top">
                <b><i style="font-size: 20px; letter-spacing: 1px;">Technical & Skills</i></b>
            </td>
            <td>
                <?php foreach ($skill as $key => $val) : ?>
                    <?= $val['name'] ?>,
                <?php endforeach; ?>
            </td>
        </tr>
    </table>
    <br>
    <hr>
    <br>
    <table style="width: 100%" class="table">
        <tr>
            <td width="150px; vertical-align: top">
                <b><i style="font-size: 20px; letter-spacing: 1px;">Experience</i></b>
            </td>
            <td></td>
        </tr>
        <?php foreach ($experience as $key => $val) : ?>
            <tr>
                <td></td>
                <td>
                    <table width='100%'>
                        <tr>
                            <td width='75%'>
                                <b style="font-size: 18px;"> <?= $val['company_name'] ?></b>
                                <br>
                                <?= $val['title'] ?>
                            </td>
                            <td>
                                <?= date('Y/m', strtotime($val['start_date'])) . '-' . date('Y/m', strtotime($val['end_date'])) ?>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2"><?= $val['description'] ?></td>
                        </tr>
                    </table>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
    <br>
    <hr>
    <br>
    <table style="width: 100%" class="table">
        <tr>
            <td width="150px; vertical-align: top">
                <b><i style="font-size: 20px; letter-spacing: 1px;">Education</i></b>
            </td>
            <td>
                <?php foreach ($education as $key => $val) : ?>
                    <table width='100%'>
                        <tr>
                            <td width='75%'>
                                <b style="font-size: 18px;"><?= $val['name'] ?> &mdash; <?= date('Y', strtotime($val['start_date'])) . '-' . date('Y', strtotime($val['end_date'])) ?></b>
                                <br>
                                <?= $val['title'] ?>
                            </td>
                        </tr>
                    </table>
                    <br>
                <?php endforeach; ?>
            </td>
        </tr>
    </table>
    <br>
    <br>
    <div id="ft">
        <p><?= $cv['name'] ?> &mdash; <a href="mailto:<?= $cv['email'] ?>"><?= $cv['email'] ?></a> &mdash; <?= $cv['phone'] ?></p>
    </div>
</body>

</html>