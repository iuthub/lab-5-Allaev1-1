<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Buy Your Way to a Better Education!</title>
    <link href="webpage/buyagrade.css" type="text/css" rel="stylesheet" />
</head>

<body>
<h1>Buy Your Way to a Better Education!</h1>

<p>
    The rough economy, along with recent changes in University of Washington policy, now allow us to offer grades for money.  That's right!  All you need to get a 4.0 in this course is cold, hard, cash.
</p>

<hr />

<h2>Give Us Your Money</h2>
<dl>
    <dt>Name</dt>
    <dd>
        <input type="text" name="studentName"/>
    </dd>

    <dt>Section</dt>
    <dd>
        <select name="section[]">
            <option disabled selected>(Select your section)</option>
            <option>MA</option>
            <option>MB</option>
            <option>MC</option>
            <option>MD</option>
            <option>ME</option>
            <option>MF</option>
            <option>MG</option>
            <option>MH</option>
        </select>
    </dd>

    <dt>Credit Card</dt>
    <dd>
        <input type="text" name="creditCardNumber"/>
        <div>
            <input type="radio" name="cc" value="visa"/> Visa
            <input type="radio" name="cc" value="mastercard"/> MasterCard
        </div>
    </dd>


</dl>

<div>
    <input type="submit" name="submitButton" value="I am a giant sucker."/>
</div>
</body>
</html>
