<?php
public function fileup(){
    if ($this->request->is('post') || $this->request->is('put')) {
        //画像の保存
        if($this->Post->save($this->request->data)){
            //画像保存先のパス
            $path = IMAGES;
            $image = $this->request->data['Post']['image'];
            $this->Session->setFlash('画像を登録しました');
            move_uploaded_file($image['tmp_name'], $path . DS . $image['name']);
        }else{
            $this->Session->setFlash('画像が登録できませんでした');
        }
    }
}