<?php
public function fileup(){
    if ($this->request->is('post') || $this->request->is('put')) {
        //�摜�̕ۑ�
        if($this->Post->save($this->request->data)){
            //�摜�ۑ���̃p�X
            $path = IMAGES;
            $image = $this->request->data['Post']['image'];
            $this->Session->setFlash('�摜��o�^���܂���');
            move_uploaded_file($image['tmp_name'], $path . DS . $image['name']);
        }else{
            $this->Session->setFlash('�摜���o�^�ł��܂���ł���');
        }
    }
}