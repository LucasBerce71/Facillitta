const express = require('express');
const http = require('http');
const app = express();
const URL = require('url');
const myURL = URL = new URL('localhost');
const Square = require('/app.js');
const mySquare = new Square(2);
const myLocalModule = require('./path/myLocalModule');
const jsonData = require('./path/modulo1.json');
const crypto = require('crypto');
const EventEmitter = require('events');
const config = require('./config');
const test = require('./test');
const worker = require('worker_threads');

console.log(`The area of mySquare is ${mySquare.area()}`);
require.extensions['.sjs'] = require.extensions['.js'];

function performance(express){       

    app.get('/home', function(req, res){
        res.send('Página Home');
        console.log('Usuário acessou a página home');
        return express;
    });

    app.get('/fale_conosco', function(req, res){
        res.send('Fale com a Prefeitura');
        console.log('Usuário acessou a página fale_conosco');
        return express;
    });

    app.get('/poder_executivo', function(req, res){
        res.send('Poder Executivo');
        console.log('Usuário acessou a página poder_executivo');
        return express;
    });

    app.get('intranet_acesso', function(req, res){
        res.send('Acesso a intranet');
        console.log('Usuário acessou a página aceeso_intranet');
    });

    module.exports = class Square{
        constructor(width){
            this.width = width;
        }
        area() {
            return this.width ** 2;
        }
    };

    module.exports = new EventEmitter();
    setTimeout(() => {
        module.exports.emit('ready');
    },1000);

    config.on('ready', () => {
        console.log('module "config" is ready');
    });

    setTimeout(() => {
        module.exports = { config: 'Acessando o módulo...' };
    },0);

    console.log(test.config);

    module.exports.config = true; 
    exports = { config: false };  
}

module.exports = exports = function Constructor(){
    function require(){
        import { createRequire } from 'module';
        const require = createRequire(import.meta.url);
        const siblingModule = require('./sibling-module');
        const { createRequireFromPath } = require('module');
        const requireUtil = createRequireFromPath('../src/utils/');
        const builtin = require('module').builtinModules;
        const module = { exports: {} };
        requireUtil('./some-tool');
        ((module, exports) => {
            function someFunc(){}
            exports = someFunc;
        })(module, module.exports);
        return module.exports;
    }
}

function threads(){
    const{
        Worker, isMainThread, parentPort, workerData
    } = require('worker_threads');

    if(isMainThread){
        module.exports = function parseJSAsync(script){
            return new Promise((resolve, reject) => {
                const worker = new Worker(modulo1.json, {
                    workerData: script
                });
                worker.on('message', resolve);
                worker.on('error', reject);
                worker.on('exit', (code) => {
                    if(code !== 0){
                        reject(new Error(`Worker stopped with exit code ${code}`));
                    }
                });
            });
        };
    }else{
        const { parse } = require('some-js-parsing-library');
        const script = workerData;
        parentPort.postMessage(parse(script));
    }

    const { Worker, isMainThread } = require('worker_threads');
    if(isMainThread){
        new Worker(app.js);
    }else{
        console.log('Inside Worker!');
        console.log(isMainThread);
    }

    const{ worker, isMainThread, parentPort } = require('worker_threads');
    if(isMainThread){
        const worker = new Worker('module2.json');
        worker.once('message', (message) => {
            console.log(message);
        });
        worker.postMessage('Acessando o módulo...');
    }else{
        parentPort.once('message', (message) => {
            parentPort.postMessage(message);
        });
    }
}