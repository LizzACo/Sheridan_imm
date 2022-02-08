const fs = require('fs');
const _ = require('lodash');

var addNote = (title, body) =>{
    var notes = fetchNotes();
    var note = {title, body};    
    

    var dupes = notes.filter((note) => {
        return note.title === title;
    });

    if(dupes.length === 0){
        notes.push(note);
        saveNotes(notes);
        return note;
    }
}

var saveNotes = (notes) => {
    fs.writeFileSync('notes-data.json', JSON.stringify(notes));
};

var fetchNotes = () => {
    try{
        var noteString = fs.readFileSync('notes-data.json');
        return JSON.parse(noteString);
    }catch(e){
        console.log('creating new notes data file');
        return [];
    }
}

var getAll = () =>{
    return fetchNotes();
   
}

var getNote = (title) => {
    var notes = fetchNotes();
    var targetNotes = notes.filter((note) => {
        return note.title === title;
    });
    console.log(targetNotes);
    return targetNotes[0];
};

var remove = (title) => {
    var notes = fetchNotes();
    var keeps = notes.filter((note) => {
        return note.title != title;
    });

    saveNotes(keeps);
    if(!(_.isEqual(keeps.sort(), notes.sort()))){
        return title;
    }
}


var logNote = (note) => {
    debugger;
    console.log(`Title: ${note.title}`, `Body: ${note.body}`);
}

module.exports = {
    addNote,
    getAll,
    getNote,
    remove,
    logNote
};