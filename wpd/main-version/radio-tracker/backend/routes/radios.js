const router = require('express').Router();
let Radio = require('../models/radio.model');

router.route('/').get((req, res) => {
  Radio.find()
    .then(radios => res.json(radios))
    .catch(err => res.status(400).json('Error: ' + err));
});

router.route('/add').post((req, res) => {
  const model = req.body.model;
  const serial = req.body.serial;
  const mdcid = req.body.mdcid;
  const assigned = req.body.assigned;
  const dateIssued = Date.parse(req.body.dateIssued);

  const newRadio = new Radio({
    model,
    serial,
    mdcid,
    assigned,
    dateIssued
  });

  newRadio
    .save()
    .then(() => res.json('Radio added!'))
    .catch(err => res.status(400).json('Error: ' + err));
});

// @route   GET api/radios/:id
// @desc    Get radio by ID
// @access  Public
router.route('/:id').get((req, res) => {
  Radio.findById(req.params.id)
    .then(radios => res.json(radios))
    .catch(err => res.status(400).json('Error: ' + err));
});

// @route   DELETE api/radios/:id
// @desc    DELETE radio by ID
// @access  Public
router.route('/:id').delete((req, res) => {
  Radio.findByIdAndDelete(req.params.id)
    .then(() => res.json('Radio deleted.'))
    .catch(err => res.status(400).json('Error: ' + err));
});

// @route   POST api/radios/:id
// @desc    Update radio by ID
// @access  Public
router.route('/update/:id').post((req, res) => {
  Radio.findById(req.params.id)
    .then(radio => {
      radio.model = req.body.model;
      radio.serial = req.body.serial;
      radio.mdcid = req.body.mdcid;
      radio.assigned = req.body.assigned;
      radio.dateIssued = req.body.dateIssued;

      radio
        .save()
        .then(() => res.json('Radio update!'))
        .catch(err => res.status(400).json('Error: ' + err));
    })
    .catch(err => res.status(400).json('Error: ' + err));
});

module.exports = router;
