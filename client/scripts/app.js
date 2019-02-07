import 'babel-polyfill';
import './utils/polyfills';

import '../styles/app.scss';

const handlePageLoad = () => {
  const body = document.querySelector('body');
  body.classList.add('page--loaded');
};

(function () {
  window.addEventListener('load', () => {
    handlePageLoad();
  });
})();
