const fs = require('fs');
var original = {
    title:"some title",
    body:"some body"
};

let originalNoteString = JSON.stringify(original);

fs.writeFileSync('notes.json', originalNoteString);

var noteString = fs.readFileSync('notes.json');
note = JSON.parse(noteString);

console.log(note.title);