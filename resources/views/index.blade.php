<!DOCTYPE html>
<html lang="en" class="k-webkit k-webkit103">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Competition VTCU </title>
    <link href="./assets/css/main.min.css" rel="stylesheet" type="text/css">
    <link href="./assets/css/lightslider.min.css" rel="stylesheet" type="text/css">
    <link href="./assets/css/GLOW.css" rel="stylesheet" type="text/css">
    <link href="./assets/css/glo_custom.css" rel="stylesheet" type="text/css">
    <link href="./assets/css/font.css" rel="stylesheet" type="text/css">
    <link href="./assets/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="./assets/css/comp1-custom.css" rel="stylesheet" type="text/css">

    <style>
        .public .comp1-head .site-header {
            background: none !important;
            padding: 0px 0px !important;
            direction: ltr;
        }

        #img_head {
            margin-top: 3rem !important;
        }

        @media screen and (max-width:600px) {
            .public .comp1-head .site-header {
                height: 35vw;
            }

            #img_head {
                margin-top: 1.2rem !important;
            }

            .public .comp1-container h3 strong {
                font-size: 2rem;
            }
        }
    </style>
    <script src="./assets/js/main.min.js" type="text/javascript"></script>
    <script src="./assets/js/main1.min.js" type="text/javascript"></script>
    <script src="./assets/js/main2.min.js" type="text/javascript"></script>
    <script src="./assets/js/main3.min.js" type="text/javascript"></script>
    <span id="pageTitle" style="display:none;"></span>
    <script>
        var dynamicItemTitle = "";
    </script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>

<body class="public comp1-body">


    <div>
        <div class="row p-0 comp1-head" data-sf-element="Row">
            <div id="Contentplaceholder1_T760BED14078_Col00" class="sf_colsIn col-lg-12 p-0" data-sf-element="Column 1" data-placeholder-label="Column 1">
                <div id="Contentplaceholder1_TF1CD8807087_Col00" class="sf_colsIn container" data-sf-element="Container" data-placeholder-label="Container">
                    <div>
                        <div>
                            <div>
                                <img class="site-header" alt="logo" src="./assets/img/H1.png">
                                <div class="container1">
                                    <div class="row"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            @include('alert-messages')
            @include('errors')
        </div>
        <div class="mainContainer comp1-container" data-sf-element="Row">
            <div id="Contentplaceholder1_T760BED14057_Col00" class="sf_colsIn" data-sf-element="Column 1" data-placeholder-label="Column 1">
                <div id="Contentplaceholder1_TF1CD8807093_Col00" class="sf_colsIn container" data-sf-element="Container" data-placeholder-label="Container">
                    <div id="Contentplaceholder1_C005_Col00" class="sf_colsIn container" data-sf-element="Container" data-placeholder-label="Container">
                        <div class="row" data-sf-element="Row">
                            <div id="Contentplaceholder1_C008_Col00" class="sf_colsIn offset-1 col-lg-10" data-sf-element="Column 1" data-placeholder-label="Column 1">
                                <div>
                                    <div>
                                        <h3 align="center" style="text-align: center" id="img_head" class="mt-5"><strong>
                                                Distracted
                                                Driver Campaign</strong>
                                        </h3>
                                        <h4 style="text-align: center"><strong><span style="font-size: x-large"><br></span><span style="font-size: large">Best creative content
                                                    competition</span><span style="font-size: medium"> </span><span style="font-size: medium"></span></strong>
                                        </h4>
                                    </div>
                                </div>
                                <div id="divAlready2" name="divAlready2" data-sf-role="form-container" class="comp1-form">
                                    <input type="hidden" data-sf-role="form-id" value="7727d807-6dcf-491c-9cdb-a3aced4ec365" name="FormId">
                                    <!-- <form action="https://glow.sapublichosting.com/tdapp/distracteddriving?sf_cntrl_id=ctl00%24Contentplaceholder1%24C002" method="POST" name="defaultFormctl00$Contentplaceholder1$C002" enctype="multipart/form-data" role="form"> -->
                                    <form enctype="multipart/form-data" role="form" action="./register_student" method="POST">
                                        @csrf
                                        <div class="form-group" data-sf-role="navigation-field-container">
                                            <input type="hidden" data-sf-role="step-of-resources" value="Step {0} of {1}">
                                            <ol data-sf-role="sr-progressbar" class="sf-FormNav" tabindex="0" role="progressbar" aria-valuemin="1" aria-valuemax="3" aria-valuenow="1" aria-valuetext="Step 1 of 3: Step 1">
                                                <li class="d-inline-flex align-items-center active" data-sf-navigation-index="0" aria-hidden="true">
                                                    <span class="sf-FormNav-page d-inline-flex align-items-center justify-content-center">
                                                        <span class="sf-FormNav-page-number">1 </span>
                                                    </span>
                                                    <span data-sf-page-title="Step 1">Step 1</span>
                                                </li>
                                                <li class="d-inline-flex align-items-center future" data-sf-navigation-index="1" aria-hidden="true">
                                                    <span class="sf-FormNav-page d-inline-flex align-items-center justify-content-center">
                                                        <span class="sf-FormNav-page-number">2 </span>
                                                    </span>
                                                    <span data-sf-page-title="Step 2">Step 2</span>
                                                </li>
                                                <li class="d-inline-flex align-items-center future" data-sf-navigation-index="2" aria-hidden="true">
                                                    <span class="sf-FormNav-page d-inline-flex align-items-center justify-content-center">
                                                        <span class="sf-FormNav-page-number">3 </span>
                                                    </span>
                                                    <span data-sf-page-title="Step 3">Step 3</span>
                                                </li>
                                            </ol>
                                        </div>
                                        <div data-sf-role="separator" style="">
                                            <div>
                                                <div>
                                                    <h4 style="text-align: left"><strong><span style="font-size: x-large"><br></span><span style="font-size: medium">Best creative content
                                                                competition rules:</span><span style="font-size: medium"></span></strong>
                                                    </h4>
                                                    <br>
                                                    <p><span style="font-size: large">
                                                            1. The contest is open to all trainees.

                                                        </span>
                                                    </p>
                                                    <p><span style="font-size: large">2. Participants must own the rights to the entry. Entries using copyrighted material will be disqualified.

                                                        </span>
                                                    </p>
                                                    <p><span style="font-size: large">3. All entries must be in English and/or Arabic and of high quality.

                                                        </span>
                                                    </p>
                                                    <p><span style="font-size: large">4. Entries may be the product of a single participant or a group of participants. Each participant or participant group may only submit one entry per category.

                                                        </span>
                                                    </p>
                                                    <p><span style="font-size: large">5. Essays must be electronically submitted. They must be the original work of the participant and should not exceed 300 words in length.
                                                        </span>
                                                    </p>
                                                    <p><span style="font-size: large">6. Video/audio duration must be 1 to 2 minutes, and may not exceed 20MB in size.

                                                        </span>
                                                    </p>

                                                </div>
                                            </div>
                                            <div class="comp1_ctrl_cover form-group">
                                                <a href="javascript:void(0)" data-sf-btn-role="prev" style="display: none;">Previous</a>
                                                <button data-sf-btn-role="next" type="button" class="btn btn-secondary">Next</button>
                                            </div>
                                        </div>
                                        <div data-sf-role="separator" style="display: none;">
                                            <div class="row" data-sf-element="Row">
                                                <div id="C006_Col00" class="sf_colsIn col-lg-12" data-sf-element="Column 1" data-placeholder-label="Column 1">
                                                    <div id="C007_Col00" class="sf_colsIn container" data-sf-element="Container" data-placeholder-label="Container">
                                                        <div class="sf-fieldWrp" role="heading">
                                                            Participant Information
                                                        </div>
                                                    </div>
                                                    <div class="row" data-sf-element="Row">
                                                        <div id="C008_Col00" class="sf_colsIn col-lg-6" data-sf-element="Column 1" data-placeholder-label="Column 1">
                                                            <!-- InputCssClass class variable -->
                                                            <div class="form-group" data-sf-role="text-field-container">
                                                                <input data-sf-role="violation-restrictions" type="hidden" value="{&quot;maxLength&quot;:&quot;255&quot;, &quot;minLength&quot;: &quot;0&quot;}">
                                                                <input data-sf-role="violation-messages" type="hidden" value="{&quot;maxLength&quot;:&quot;Name field must be less than 255 characters&quot;, &quot;required&quot;: &quot;Name field input is required&quot;, &quot;invalid&quot;: &quot;Entry is not valid!&quot;, &quot;regularExpression&quot;: &quot;Name field input is invalid&quot;}">
                                                                <label class="h6" for="Textbox-1">Name</label>
                                                                <input id="Textbox-1" type="text" class="form-control" name="name" placeholder="Name (Required)" value="" aria-required="true" data-sf-role="text-field-input" required="required" pattern=".{0,255}">
                                                            </div>
                                                        </div>
                                                        <div id="C008_Col01" class="sf_colsIn col-lg-6" data-sf-element="Column 2" data-placeholder-label="Column 2">
                                                            <div class="form-group" data-sf-role="text-field-container">
                                                                <input data-sf-role="violation-restrictions" type="hidden" value="{&quot;maxLength&quot;:&quot;255&quot;, &quot;minLength&quot;: &quot;0&quot;}">
                                                                <input data-sf-role="violation-messages" type="hidden" value="{&quot;maxLength&quot;:&quot;Email field must be less than 255 characters&quot;, &quot;required&quot;: &quot;Email field input is required&quot;, &quot;invalid&quot;: &quot;Entry is not valid!&quot;, &quot;regularExpression&quot;: &quot;Email field input is invalid&quot;}">
                                                                <label class="h6" for="Textbox-2">Email</label>
                                                                <input id="Textbox-2" type="text" class="form-control" name="email" placeholder="ex: alex@gmail.com (Required)" value="" aria-required="true" data-sf-role="text-field-input" required="required" pattern=".{0,255}">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row" data-sf-element="Row">
                                                <div id="C009_Col00" class="sf_colsIn col-lg-6" data-sf-element="Column 1" data-placeholder-label="Column 1">
                                                    <div class="form-group" data-sf-role="dropdown-list-field-container">
                                                        <input type="hidden" data-sf-role="violation-messages" value="{ &quot;required&quot;: &quot;Gender field input is required&quot;}">
                                                        <label class="h6" for="Dropdown-1">
                                                            Gender
                                                        </label>
                                                        <select id="Dropdown-1" data-sf-role="dropdown-list-field-select" name="gender" required="required" class="form-control" aria-required="true">
                                                            <option value="">- Select -</option>
                                                            <option value="Male">Male</option>
                                                            <option value="Female">Female</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div id="C009_Col01" class="sf_colsIn col-lg-6" data-sf-element="Column 2" data-placeholder-label="Column 2">
                                                    <!-- InputCssClass class variable -->
                                                    <div class="form-group" data-sf-role="text-field-container">
                                                        <input data-sf-role="violation-restrictions" type="hidden" value="{&quot;maxLength&quot;:&quot;255&quot;, &quot;minLength&quot;: &quot;0&quot;}">
                                                        <input data-sf-role="violation-messages" type="hidden" value="{&quot;maxLength&quot;:&quot;Age field must be less than 255 characters&quot;, &quot;required&quot;: &quot;Age field input is required&quot;, &quot;invalid&quot;: &quot;Entry is not valid!&quot;, &quot;regularExpression&quot;: &quot;Age field input is invalid&quot;}">
                                                        <label class="h6" for="Textbox-3">Age</label>
                                                        <input id="Textbox-3" type="text" class="form-control" name="age" placeholder="Age (Required)" value="" aria-required="true" data-sf-role="text-field-input" required="required" pattern=".{0,255}">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row" data-sf-element="Row">
                                                <div id="C010_Col00" class="sf_colsIn col-lg-6" data-sf-element="Column 1" data-placeholder-label="Column 1">
                                                    <div class="form-group" data-sf-role="dropdown-list-field-container">
                                                        <input type="hidden" data-sf-role="violation-messages" value="{ &quot;required&quot;: &quot;Region field input is required&quot;}">
                                                        <label class="h6" for="Dropdown-2">
                                                            Region
                                                        </label>
                                                        <select id="Dropdown-2" data-sf-role="dropdown-list-field-select" name="region" required="required" class="form-control" aria-required="true">
                                                            <option value="">- Select - (Required)</option>
                                                            <option value="Eastern">Eastern</option>
                                                            <option value="Central">Central</option>
                                                            <option value="Northern">Northern</option>
                                                            <option value="Southern">Southern</option>
                                                            <option value="Other">Other</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div id="C010_Col01" class="sf_colsIn col-lg-6" data-sf-element="Column 2" data-placeholder-label="Column 2">
                                                    <!-- InputCssClass class variable -->
                                                    <div class="form-group" data-sf-role="text-field-container">
                                                        <input data-sf-role="violation-restrictions" type="hidden" value="{&quot;maxLength&quot;:&quot;10&quot;, &quot;minLength&quot;: &quot;10&quot;}">
                                                        <input data-sf-role="violation-messages" type="hidden" value="{&quot;maxLength&quot;:&quot;Mobile field must be less than 10 characters&quot;, &quot;required&quot;: &quot;Mobile field input is required&quot;, &quot;invalid&quot;: &quot;Entry is not valid!&quot;, &quot;regularExpression&quot;: &quot;Mobile field input is invalid&quot;}">
                                                        <label class="h6" for="Textbox-4">Mobile</label>
                                                        <input id="Textbox-4" type="text" class="form-control" name="mobile" placeholder="050xxxxxxx (Required)" value="" aria-required="true" data-sf-role="text-field-input" required="required" pattern=".{10,10}">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row" data-sf-element="Row">
                                                <div id="C010_Col02" class="sf_colsIn col-lg-6" data-sf-element="Column 3" data-placeholder-label="Column 3">
                                                    <!-- InputCssClass class variable -->
                                                    <div class="form-group" data-sf-role="text-field-container">
                                                        <input data-sf-role="violation-restrictions" type="hidden" value="{&quot;maxLength&quot;:&quot;10&quot;, &quot;minLength&quot;: &quot;10&quot;}">
                                                        <input data-sf-role="violation-messages" type="hidden" value="{&quot;maxLength&quot;:&quot;Mobile field must be less than 10 characters&quot;, &quot;required&quot;: &quot;Mobile field input is required&quot;, &quot;invalid&quot;: &quot;Entry is not valid!&quot;, &quot;regularExpression&quot;: &quot;Mobile field input is invalid&quot;}">
                                                        <label class="h6" for="Textbox-4">Badge NO</label>
                                                        <input id="Textbox-5" type="number" class="form-control" name="id_card" placeholder="xxxxxxx (Required)" value="" aria-required="true" data-sf-role="text-field-input" required="required">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row" data-sf-element="Row">
                                                <div id="C011_Col00" class="sf_colsIn col-lg-12" data-sf-element="Column 1" data-placeholder-label="Column 1">
                                                    <fieldset class="form-group" data-sf-role="multiple-choice-field-container">
                                                        <legend class="h6" id="RadioGroupLabel-1">Are you</legend>
                                                        <input type="hidden" data-sf-role="violation-messages" value="{ &quot;required&quot;: &quot;Are you field input is required&quot;}">
                                                        <ul class="list-unstyled" aria-labelledby="RadioGroupLabel-1">
                                                            <li>
                                                                <label>
                                                                    <input type="radio" name="job" value="an Employee" data-sf-role="multiple-choice-field-input" required="required" pattern=".{0,255}" role="radio" aria-required="true">
                                                                    an Employee
                                                                </label>
                                                            </li>
                                                            <li>
                                                                <label>
                                                                    <input type="radio" name="job" value="a Trainee" data-sf-role="multiple-choice-field-input" required="required" pattern=".{0,255}" role="radio" aria-required="true">
                                                                    a Trainee
                                                                </label>
                                                            </li>
                                                            <li>
                                                                <label>
                                                                    <input type="radio" name="job" value="other" data-sf-role="multiple-choice-field-input" required="required" pattern=".{0,255}" role="radio" aria-required="true">
                                                                    other
                                                                </label>
                                                            </li>
                                                        </ul>
                                                    </fieldset>
                                                </div>
                                            </div>
                                            <div class="comp1_ctrl_cover form-group">
                                                <a href="javascript:void(0)" data-sf-btn-role="prev">Previous</a>
                                                <button data-sf-btn-role="next" type="button" class="btn btn-secondary">Next</button>
                                            </div>
                                            <input id="stepNewFormSubmit" style="display:none;" type="submit">
                                        </div>
                                        <div data-sf-role="separator" style="display:none;">
                                            <div class="sf-fieldWrp" role="heading">
                                                Required Documents&nbsp;
                                            </div>
                                            <div class="row" data-sf-element="Row">
                                                <div id="C023_Col00" class="sf_colsIn col-lg-6" data-sf-element="Column 1" data-placeholder-label="Column 1">
                                                    <div class="sf-FileField form-group" data-sf-role="file-field-container" data-sf-config="{&amp;quot;AllowMultipleFiles&amp;quot;:false,&amp;quot;AcceptedFileTypes&amp;quot;:[&amp;quot;.avi&amp;quot;,&amp;quot;.mpg&amp;quot;,&amp;quot;.mpeg&amp;quot;,&amp;quot;.mov&amp;quot;,&amp;quot;.mp4&amp;quot;,&amp;quot;.wmv&amp;quot;],&amp;quot;IsRequired&amp;quot;:false,&amp;quot;MinFileSizeInMb&amp;quot;:0,&amp;quot;MaxFileSizeInMb&amp;quot;:20}">
                                                        <label class="h6" for="FileUpload-1">Video</label>
                                                        <div data-sf-role="file-field-inputs">
                                                            <script type="text/template" data-sf-role="file-input-template">
                                                                <div data-sf-role="single-file-input">

                                                                    <label for="FileUpload-1" class="btn-file">Choose File</label>


                                                                    <input id='FileUpload-1' title="file" type="file" name="video" accept=".avi,.mpg,.mpeg,.mov,.mp4,.wmv" style="visibility:hidden;" aria-required="false">

                                                                    <p class="text-danger" role="alert" aria-live="assertive" data-sf-role="filetype-violation-message" style="display: none;">File type is not allowed to upload</p>
                                                                    <p class="text-danger" role="alert" aria-live="assertive" data-sf-role="filesize-violation-message" style="display: none;">The selected file size is too large</p>
                                                                </div>
                                                            </script>
                                                        </div>
                                                        <p class="text-danger" role="alert" aria-live="assertive" data-sf-role="required-violation-message" style="display: none;">This field is required</p>
                                                    </div>
                                                </div>
                                                <div id="C023_Col01" class="sf_colsIn col-lg-6" data-sf-element="Column 2" data-placeholder-label="Column 2">
                                                    <div class="sf-FileField form-group" data-sf-role="file-field-container" data-sf-config="{&amp;quot;AllowMultipleFiles&amp;quot;:true,&amp;quot;AcceptedFileTypes&amp;quot;:[&amp;quot;.jpg&amp;quot;,&amp;quot;.jpeg&amp;quot;,&amp;quot;.png&amp;quot;,&amp;quot;.gif&amp;quot;,&amp;quot;.bmp&amp;quot;],&amp;quot;IsRequired&amp;quot;:false,&amp;quot;MinFileSizeInMb&amp;quot;:0,&amp;quot;MaxFileSizeInMb&amp;quot;:20}">
                                                        <label class="h6" for="FileUpload-2">Picture</label>
                                                        <div data-sf-role="file-field-inputs">
                                                            <script type="text/template" data-sf-role="file-input-template">
                                                                <div data-sf-role="single-file-input">

                                                                    <label for="FileUpload-2" class="btn-file">Choose File</label>
                                                                    <input id='FileUpload-2' title="file" type="file" name="picture" accept=".jpg,.jpeg,.png,.gif,.bmp" style="visibility:hidden;" aria-required="false">

                                                                    <p class="text-danger" role="alert" aria-live="assertive" data-sf-role="filetype-violation-message" style="display: none;">File type is not allowed to upload</p>
                                                                    <p class="text-danger" role="alert" aria-live="assertive" data-sf-role="filesize-violation-message" style="display: none;">The selected file size is too large</p>
                                                                </div>
                                                            </script>
                                                        </div>
                                                        <p class="text-danger" role="alert" aria-live="assertive" data-sf-role="required-violation-message" style="display: none;">This field is required</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row" data-sf-element="Row">
                                                <div id="C024_Col00" class="sf_colsIn col-lg-6" data-sf-element="Column 1" data-placeholder-label="Column 1">
                                                    <div class="sf-FileField form-group" data-sf-role="file-field-container" data-sf-config="{&amp;quot;AllowMultipleFiles&amp;quot;:true,&amp;quot;AcceptedFileTypes&amp;quot;:[&amp;quot;.jpg&amp;quot;,&amp;quot;.jpeg&amp;quot;,&amp;quot;.png&amp;quot;,&amp;quot;.gif&amp;quot;,&amp;quot;.bmp&amp;quot;,&amp;quot;.pdf&amp;quot;,&amp;quot;.doc&amp;quot;,&amp;quot;.docx&amp;quot;,&amp;quot;.ppt&amp;quot;,&amp;quot;.pptx&amp;quot;,&amp;quot;.pps&amp;quot;,&amp;quot;.ppsx&amp;quot;,&amp;quot;.xls&amp;quot;,&amp;quot;.xlsx&amp;quot;],&amp;quot;IsRequired&amp;quot;:false,&amp;quot;MinFileSizeInMb&amp;quot;:0,&amp;quot;MaxFileSizeInMb&amp;quot;:20}">
                                                        <label class="h6" for="FileUpload-3">Poster/Banner</label>
                                                        <div data-sf-role="file-field-inputs">
                                                            <script type="text/template" data-sf-role="file-input-template">
                                                                <div data-sf-role="single-file-input">

                                                                    <label for="FileUpload-3" class="btn-file">Choose File</label>
                                                                    <input id='FileUpload-3' title="file" type="file" name="poster" accept=".jpg,.jpeg,.png,.gif,.bmp,.pdf,.doc,.docx,.ppt,.pptx,.pps,.ppsx,.xls,.xlsx" style="visibility:hidden;" aria-required="false">

                                                                    <p class="text-danger" role="alert" aria-live="assertive" data-sf-role="filetype-violation-message" style="display: none;">File type is not allowed to upload</p>
                                                                    <p class="text-danger" role="alert" aria-live="assertive" data-sf-role="filesize-violation-message" style="display: none;">The selected file size is too large</p>
                                                                </div>
                                                            </script>
                                                        </div>
                                                        <p class="text-danger" role="alert" aria-live="assertive" data-sf-role="required-violation-message" style="display: none;">This field is required</p>
                                                    </div>
                                                </div>
                                                <div id="C024_Col01" class="sf_colsIn col-lg-6" data-sf-element="Column 2" data-placeholder-label="Column 2">
                                                    <div class="sf-FileField form-group" data-sf-role="file-field-container" data-sf-config="{&amp;quot;AllowMultipleFiles&amp;quot;:true,&amp;quot;AcceptedFileTypes&amp;quot;:[&amp;quot;.pdf&amp;quot;,&amp;quot;.doc&amp;quot;,&amp;quot;.docx&amp;quot;,&amp;quot;.ppt&amp;quot;,&amp;quot;.pptx&amp;quot;,&amp;quot;.pps&amp;quot;,&amp;quot;.ppsx&amp;quot;,&amp;quot;.xls&amp;quot;,&amp;quot;.xlsx&amp;quot;],&amp;quot;IsRequired&amp;quot;:false,&amp;quot;MinFileSizeInMb&amp;quot;:0,&amp;quot;MaxFileSizeInMb&amp;quot;:0}">
                                                        <label class="h6" for="FileUpload-4">Article &amp;
                                                            Essays</label>
                                                        <div data-sf-role="file-field-inputs">
                                                            <script type="text/template" data-sf-role="file-input-template">
                                                                <div data-sf-role="single-file-input">

                                                                    <label for="FileUpload-4" class="btn-file">Choose File</label>
                                                                    <input id='FileUpload-4' title="file" type="file" name="article" accept=".pdf,.doc,.docx,.ppt,.pptx,.pps,.ppsx,.xls,.xlsx" style="visibility:hidden;" aria-required="false">

                                                                    <p class="text-danger" role="alert" aria-live="assertive" data-sf-role="filetype-violation-message" style="display: none;">File type is not allowed to upload</p>
                                                                </div>
                                                            </script>
                                                        </div>
                                                        <p class="text-danger" role="alert" aria-live="assertive" data-sf-role="required-violation-message" style="display: none;">This field is required</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="comp1_ctrl_cover form-group">
                                                <a href="javascript:void(0)" data-sf-btn-role="prev">Previous </a>
                                                <button type="submit" class="sf-SubmitButton btn btn-primary">Submit</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <script language="javascript"></script>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="Contentplaceholder1_TF1CD8807088_Col00" class="sf_colsIn container" data-sf-element="Container" data-placeholder-label="Container">
            <footer id="footer-comp">
                <div class="site-footer comp1-footer">
                    <div class="container">
                        <div class="row">
                            <div id="Contentplaceholder1_TF1CD8807091_Col00" class="sf_colsIn copyright col text-center" data-sf-element="Column 1" data-placeholder-label="Column 1">
                                <p>Copyright &copy; All Rights Reserved by Vocational Training Collaboration Unit Competition 2022.</p>
                            </div>
                            <em class="glyphicon glyphicon-earphone"></em>
                        </div>
                    </div>
                </div>
                <!-- .footer-bottom -->
            </footer>
        </div>
    </div>
    <script src="./assets/js/lightslider.min.js" type="text/javascript"></script>
    <script src="./assets/js/pdfobject.min.js" type="text/javascript"></script>
    <script src="./assets/js/custom.js" type="text/javascript"></script>
    <script src="./assets/js/navigation-field.js" type="text/javascript"></script>
    <script src="./assets/js/page-break.js" type="text/javascript"></script>
    <script src="./assets/js/text-field.js" type="text/javascript"></script>
    <script src="./assets/js/dropdown-list-field.js" type="text/javascript"></script>
    <script src="./assets/js/multiple-choice-field.js" type="text/javascript"></script>
    <script src="./assets/js/file-field.js" type="text/javascript"></script>
    <script src="./assets/js/submit-button.js" type="text/javascript"></script>
    <script type="application/json" id="PersonalizationTracker">
        {
            "IsPagePersonalizationTarget": false,
            "IsUrlPersonalizationTarget": false,
            "PageId": "aa1de742-b2f8-4ef5-9a0c-fc41b78a1a3b"
        }
    </script>

    <script type="text/javascript">
        $(document).ready(function() {

            $('input[type="file"]').change(function(e) {
                var fileName = e.target.files[0].name;
                $(this).children('.file-msg').remove();
                $(this).parent().append('<p class="file-msg text-success">' + 'The file "' + fileName + '" has been selected.' + '</p>');
            });
        });
    </script>
    <script>
        function toggleSection() {
            var x = document.getElementsByClassName("collapsable")[0];
            var y = document.getElementsByClassName("collapse-toggle")[0];
            if (x.style.display === "none" || x.style.display === "") {
                x.style.display = "block";
                y.classList.remove("fa-plus-square");
                y.classList.add("fa-minus-square");
            } else {
                x.style.display = "none";
                y.classList.remove("fa-minus-square");
                y.classList.add("fa-plus-square");
            }
        }
    </script>
    <script>
        $(function() {


            var itemUrl = "";
            var pageID = "aa1de742-b2f8-4ef5-9a0c-fc41b78a1a3b";
            var itemTitle = "";
            var PageTitle = $("#pageTitle").text();
            if (dynamicItemTitle != "") {
                PageTitle = dynamicItemTitle;
            }
            if (PageTitle === "")
                PageTitle = "";

            if (PageTitle === "")
                PageTitle = "DistractedDriving";


            var Hits = {
                UserID: "Anonymous",
                PageId: "aa1de742-b2f8-4ef5-9a0c-fc41b78a1a3b",
                PageTitle: PageTitle,
                PageUrl: "/tdapp/distracteddriving"
            };
            var linkHitCount = "/hits/SubmitHitCt/";

            $.ajax({
                url: '/site_hits_count/CreateHitCount/',
                contentType: "application/json; charset=utf-8",
                type: 'POST',
                dataType: "Json",
                data: JSON.stringify(Hits),
                success: function(data) {
                    var msg = data;
                    // console.log(data);
                },
                error: function(error) {
                    var msg = error;
                    if (!window.console) var console = window.console = {};
                    //console.log(error);
                }
            });

        });
        //HitsCount();
    </script>

</body>

</html>