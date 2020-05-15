var express = require('express');
var router = express.Router();

let url = 'https://climacell-microweather-v1.p.rapidapi.com/weather/realtime';
let appId = 'appid=0caPm6hP3YmQqmjvVtgofpcjeVr63lXz';
let units = '&units=metric';
var request = require('request');

/* GET home page. */
router.get('/', function(req, res, next) {
  res.render('index', {'body':'', forecast: ''});
});

module.exports = router;
