// // const express = require('express');
// const http = require('http');
// //const fs = require('fs');

// const requestListener = function (req,res){
//   res.writeHead(200, {'Content-Type': 'text/html'});
//     res.end("hello world");
// }

// const server = http.createServer(requestListener);
// server.listen(8000);

var http = require('http'),
    fs = require('fs');

// const options = {
//     key: fs.readFileSync('key.pem'),
//     cert: fs.readFileSync('cert.pem')
// }

fs.readFile('./stronka.html', function (err, html) {
    if (err) {
        throw err; 
    }       
    http.createServer(function(request, response) {  
        response.writeHeader(200, {"Content-Type": "text/html"});  
        response.write(html);  
        response.end();  
    }).listen(8000);
});