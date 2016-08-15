<?php

class Mark extends AppModel {
	public $actsAs = array(
		'Translate' => array(
			'title'
			)
		);
	// public $useTable = 'i18n';
	// public $displayField = 'field';
	public $translateModel = 'MarkI18n';
	// public $translateTable = 'i18n'; //если че удалить

    public $belongsTo = array(
        'Category' => array(
            'className' => 'Category'
        )
    );
    public $hasMany = array(
        'Product' => array(
            'className'  => 'Product',
            // 'conditions' => array('Recipe.approved' => '1'),
            // 'order'      => 'Recipe.created DESC'
        )
    );

}
?>