<?php
    /*

        You might find some benefit using this helping debugging your PHP.
        See the use of __LINE__.

    */
    function displayCurrentDateTime(){
        echo 'It\'s currently ' . Date('Y-m-d H:i.s') . '<br/>';
    }

    displayCurrentDateTime();

    $debug = false;
    // The _GET[] is collection of strings. As such, a boolean cannot be passed in the URL.
    // Here we check for the string value 'true':
    if( isset( $_GET['userDEBUG'] ) && $_GET['userDEBUG']=='true' ){
        $debug = true;
        echo 'User requested debug mode.<br />';
    }

    if( $debug )
        echo 'We\'re at line ' . __LINE__ . '<br />';

    if( $debug )
        echo 'We\'re about to start the \'For Loop\' at line ' . __LINE__ . '.<br />';

    for ( $counter = 1; $counter <= 3; $counter++ ){

        if( $debug )
            echo 'The counter is ' . $counter . ' at line ' . __LINE__ . '.<br />';
        $rand = rand(1,6);
        echo 'The die rolled ' . $rand . '.<br />';
    }

    if( $debug )
        echo 'We\'re finished the \'For Loop\' at line ' . __LINE__ . '.<br />';

    displayCurrentDateTime();
    echo 'Done.<br />';

    if( $debug )
        echo 'We\'re done at line ' . __LINE__ . '.<br />';

?>