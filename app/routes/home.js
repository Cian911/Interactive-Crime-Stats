import Ember from 'ember';
import PapaParse from 'papaparse';

export default Ember.Route.extend({

  model() {
    let data = PapaParse.parse('/Users/cian/storyful/crime-heatmap/data/dublin-crime-2017-clean.csv', {
      delimiter: ",", // auto-detect
      header: true
    });
    console.log(data);
  }

});
