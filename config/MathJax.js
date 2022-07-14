window.MathJax = {
    tex: {
      inlineMath: [['$', '$'], ['\\(', '\\)']]
    },
    svg: {
      fontCache: 'global'
    }
  };
  
  (function () {
    var script = document.createElement('script');
    script.src = './mathjax/es5/tex-chtml.js';
    script.async = true;
    document.head.appendChild(script);
  })();
  