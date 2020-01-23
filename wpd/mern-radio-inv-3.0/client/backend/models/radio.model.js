const mongoose = require('mongoose');

const Schema = mongoose.Schema;

const radioSchema = new Schema(
  {
    model: {
      type: String,
      required: true
    },
    serial: {
      type: String,
      required: true
    },
    mdcid: {
      type: String,
      required: true
    },
    assigned: {
      type: String,
      required: true
    },
    dateIssued: {
      type: Date,
      required: true
    }
  },
  {
    timestamps: true
  }
);

const Radios = mongoose.model('Radio', radioSchema);

module.exports = Radios;
