'use strict';

import RequestsToServer from './modules/requestsToServer.js';

let request = new RequestsToServer('.articles').forArticles();
let request2 = new RequestsToServer('.text').forTest();