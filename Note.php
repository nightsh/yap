<?php
/**
 *
 * @author Victor Nițu
 * @desc Class for pastebin snippets, should cover all needs, I guess
 *
 * @param id snippet's ID stored by app
 * @return snippet full snippet body
 */


class Note {

    private $saveDir = 'save';
    private $idSize  = 6;

    public $id = '';
    public $content = '';

    public function __construct($id = '') {
        $this->saveDir = dirname(__FILE__).'/'.$this->saveDir;
        $this->id = $id;

        if(strlen($this->id)>0) {
            try {
                $this->loadNote($id);
                $this->message = '<p class="alert alert-info">Note with ID '.$this->id.' loaded successfully!
                <button class="close pull-right">&times;</button></p>';
            }
            catch (Exception $e) {
                $this->message = $e->getMessage();
            }
        }
        else {
            if(isset($_POST['note'])) {
                $this->content = $_POST['note'];
                $this->saveNote($this->content);
            }
        }
    }

    private function saveNote(){
        $this->id = $this->createID();
        file_put_contents($this->saveDir.'/111'/*.$this->id*/, $this->content);
    }

    private function loadNote($id) {
        $noteFile = $this->saveDir.'/'.$this->id;
        if(file_exists($noteFile))
            $this->content = file_get_contents($noteFile);
        else
            throw new Exception('<p class="alert alert-error">Error: Note does not exist! Wrong ID ('.$this->id.')
                                    <button class="close pull-right">&times;</button></p>');
    }

    private function createID() {
        return '1212';
    }

    private function forkNote() {

    }
}
