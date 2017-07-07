<?php 
    use \koolreport\inputs\DateRangePicker;
    use \koolreport\inputs\MultiSelect;
    use \koolreport\inputs\Select;
    use \koolreport\inputs\RadioList;
    use \koolreport\inputs\CheckBoxList;
    use \koolreport\inputs\TextBox;
    use \koolreport\inputs\DateTimePicker;
?>

<!DOCTYPE >
<html>
    <head>
        <title>Input Control</title>
    </head>
    <body>      
        <link rel="stylesheet" href="../../../assets/css/example.css" />
        <div class="container box-container">
            <div class="text-center">
                <h1>List of all input controls</h1>
            </div>
            <form method="post">
                <fieldset>
                    <legend>Form</legend>
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label>TextBox</label>
                            <?php TextBox::create(array(
                                "name"=>"textBox",
                                "attributes"=>array(
                                    "class"=>"form-control",
                                    "placeholder"=>"Enter any text"
                                )
                            ));?>
                        </div>
                        <div class="col-md-6 form-group">
                            <label>DateRangePicker</label>
                            <?php
                            DateRangePicker::create(array(
                                "name"=>"dateRange",
                            ));
                            ?>
                        </div>
                        <div class="col-md-6 form-group">
                            <label>RadioList</label>
                            <?php
                            RadioList::create(array(
                                "name"=>"radioList",
                                "dataStore"=>$this->dataStore("customers"),
                                "dataBind"=>"customerName"
                            ));
                            ?>
                        </div>
                        <div class="col-md-6 form-group">
                            <label>CheckBoxList</label>
                            <?php
                            CheckBoxList::create(array(
                                "name"=>"checkBoxList",
                                "dataStore"=>$this->dataStore("customers"),
                                "dataBind"=>"customerName"
                            ));
                            ?>
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Select</label>
                            <?php
                            Select::create(array(
                                "name"=>"select",
                                "dataStore"=>$this->dataStore("customers"),
                                "defaultOption"=>array(""=>"--"),
                                "dataBind"=>"customerName",
                                "attributes"=>array(
                                    "class"=>"form-control",
                                )
                            ));
                            ?>
                        </div>
                        <div class="col-md-6 form-group">
                            <label>MultiSelect</label>
                            <?php
                            MultiSelect::create(array(
                                "name"=>"multiSelect",
                                "dataStore"=>$this->dataStore("customers"),
                                "dataBind"=>"customerName",
                                "attributes"=>array(
                                    "class"=>"form-control",
                                    "size"=>5
                                )
                            ));
                            ?>
                        </div>   
                        <div class="col-md-12 form-group">
                            <label>DateTimePicker</label>
                            <div class="row">
                                <div class="col-md-6">
                                    From Date:
                                    <?php
                                    DateTimePicker::create(array(
                                        "name"=>"startDatePicker",
                                        "maxDate"=>"@endDatePicker",
                                        "format"=>"MM/DD/YYYY HH:mm"
                                    ));
                                    ?>
                                </div>
                                <div class="col-md-6">
                                    To Date:
                                    <?php
                                    DateTimePicker::create(array(
                                        "name"=>"endDatePicker",
                                        "minDate"=>"@startDatePicker",
                                        "format"=>"MM/DD/YYYY HH:mm"
                                    ));
                                    ?>
                                </div>
                            </div>
                        </div>
                                                        
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary">Submit form</button>
                    </div>
                    <p class="form-group">
                        <i>* Please try to change form and submit, you will see the form
                        values are persistent through form post. Below are values that archived from <code>$params</code>
                        </i>
                    </p>                    
                    <pre><code><?php echo json_encode($this->params,JSON_PRETTY_PRINT) ?></code></pre>
                </fieldset>
            </form>
                <fieldset>
                    <legend>Some code to show</legend>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>TextBox</label>
                                <pre><code>
&lt?php TextBox::create(array(
    "name"=>"textBox",
    "attributes"=>array(
        "class"=>"form-control",
        "placeholder"=>"Enter any text"
    )
));?>                                
                                </code></pre>
                            </div>
                            <div class="form-group">
                                <label>RadioList</label>
                                <pre><code>
&lt?php RadioList::create(array(
    "name"=>"radioList",
    "dataStore"=>$this->dataStore("customers"),
    "dataBind"=>"customerName"
));?>                             
                                </code></pre>
                            </div>
                            <div class="form-group">
                                <label>DateTimePicker</label>
                                <pre><code>
&lt?php DateTimePicker::create(array(
    "name"=>"startDatePicker",
    "maxDate"=>"@endDatePicker",
    "format"=>"MM/DD/YYYY HH:mm"
));?>                          
                                </code></pre>
                                <pre><code>
&lt?php DateTimePicker::create(array(
    "name"=>"endDatePicker",
    "minDate"=>"@startDatePicker",
    "format"=>"MM/DD/YYYY HH:mm"
));?>                          
                                </code></pre>
                                
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>DateRangePicker</label>
                                <pre><code>
&lt?php DateRangePicker::create(array(
    "name"=>"dateRange",
));?>                                
                                </code></pre>
                            </div>
                            <div class="form-group">
                                <label>CheckBoxList</label>
                                <pre><code>
&lt?php CheckBoxList::create(array(
    "name"=>"checkBoxList",
    "dataStore"=>$this->dataStore("customers"),
    "dataBind"=>"customerName"
));?>                               
                                </code></pre>
                            </div>
                            <div class="form-group">
                                <label>Select</label>
                                <pre><code>
&lt?php Select::create(array(
    "name"=>"select",
    "dataStore"=>$this->dataStore("customers"),
    "defaultOption"=>array(""=>"--"),
    "dataBind"=>"customerName",
    "attributes"=>array(
        "class"=>"form-control",
    )
));?>                           
                                </code></pre>
                            </div>
                            <div class="form-group">
                                <label>MultiSelect</label>
                                <pre><code>
&lt?php MultiSelect::create(array(
    "name"=>"multiSelect",
    "dataStore"=>$this->dataStore("customers"),
    "dataBind"=>"customerName",
    "attributes"=>array(
        "class"=>"form-control",
        "size"=>5
    )
));?>                            
                                </code></pre>
                            </div>                            
                        </div>
                    </div>                   
                </fieldset>

            
        </div>
    </body>
</html>
