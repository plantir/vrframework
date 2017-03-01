import angular from 'angular';
import uiRouter from 'angular-ui-router';

import 'normalize.css';

let VRFrameWork = angular.module('VRFrameWork', [
    uiRouter
  ])


  .config(($locationProvider) => {
    "ngInject";
    $locationProvider.html5Mode(true).hashPrefix('!');
  })

  .name;
export default VRFrameWork;
