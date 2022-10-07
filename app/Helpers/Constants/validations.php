<?php

// define validation
const REQUIRED_VALIDATION = ['required'];

// String & Text
const REQUIRED_TEXT_VALIDATION = ['required', 'string'];

// numeric
const REQUIRED_NUMERIC_VALIDATION = ['required','numeric','between:0,99999999.99'];


// Date
const REQUIRED_DATE_VALIDATION = ['required', 'date', 'after:yesterday'];
const REQUIRED_FROM_DATE_VALIDATION = ['required', 'date', 'after:yesterday', 'before:to'];
