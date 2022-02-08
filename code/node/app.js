const fs = require('fs');
const _ = require('lodash');
const yargs = require('yargs');

const notes = require('./notes.js');

const titleOptions = {
    describe: 'title of note',
    demand: true,
    alias:'t'
};

const bodyOptions = {
    describe: 'body of note',
    demand: true,
    alias:'b'
};

const argv = yargs
.command('add', 'add a new note', {
    title:titleOptions,
    body:bodyOptions
})
.command('list', 'list all notes', {
})
.command('read', 'read a new note', {
    title:titleOptions
})
.command('remove', 'remove a note', {
    title:titleOptions
})
.help().argv;

var command = argv._[0];

if(command === 'add'){
    var n = notes.addNote(argv.title, argv.body);
    if(n){
        notes.logNote(n);
        
    }else{
        console.log('dupeessss yooo!!!!');
    }
}else if(command === 'list'){
    allNotes = notes.getAll();
    console.log(`printing ${allNotes.length} note(s)`);
    allNotes.forEach((note) => {
            notes.logNote(note);
        });

}else if(command === 'read'){
    var n = notes.getNote(argv.title);
    if(n){
        notes.logNote(n);
    }else{
        console.log('note not found');
    }
    
}else if(command === 'remove'){
    var n = notes.remove(argv.title);
    if(n){
        console.log(`${n} deleted`);
    }else{
        console.log(`cant find ${argv.title} to delete`);
    }
}else{
    console.log('???');
}