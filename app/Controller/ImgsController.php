<?php
public function fileup(){
    if ($this->request->is('post') || $this->request->is('put')) {
        //‰æ‘œ‚Ì•Û‘¶
        if($this->Post->save($this->request->data)){
            //‰æ‘œ•Û‘¶æ‚ÌƒpƒX
            $path = IMAGES;
            $image = $this->request->data['Post']['image'];
            $this->Session->setFlash('‰æ‘œ‚ð“o˜^‚µ‚Ü‚µ‚½');
            move_uploaded_file($image['tmp_name'], $path . DS . $image['name']);
        }else{
            $this->Session->setFlash('‰æ‘œ‚ª“o˜^‚Å‚«‚Ü‚¹‚ñ‚Å‚µ‚½');
        }
    }
}