<?php


drupal_add_library('system', 'drupal.ajax');

function fortake_preprocess_page(&$variables) {

  if (!empty($variables['node']) && !empty($variables['node']->type)) {
    $variables['theme_hook_suggestions'][] = 'page__node__' . $variables['node']->type;
  } 

  if( !empty($variables['node'])){
      drupal_add_js(array('nid' => $variables['node']->nid), 'setting'); 
  } 

}


function fortake_form_alter(&$form, &$form_state, $form_id) {
    if ($form_id == 'venda_ingressos_node_form') {
      $form['actions']['submit']['#value'] = '<span class="icon glyphicon glyphicon-ok" aria-hidden="true"></span> Enviar';
    }
  }




/*

function partiucadastro_auto_placeholders(&$element) {
  if ($element['#type'] == 'textfield') {
    	$element['#attributes']['placeholder'] = $element['#title'];
  }elseif($element['#type'] == 'textarea'){
  		$element['#attributes']['placeholder'] = $element['#title'];
  }elseif($element['#class'] == 'email'){
  		$element['#attributes']['placeholder'] = $element['#title'];
  }elseif($element['#type'] == 'password'){
  		$element['#attributes']['placeholder'] = $element['#title'];
  }
  foreach (element_children($element) as $key) {
    partiucadastro_auto_placeholders($element[$key]);
  }
}


function partiucadastro_form_alter(&$form, &$form_state, $form_id) {
   partiucadastro_auto_placeholders($form);
}*/


?>