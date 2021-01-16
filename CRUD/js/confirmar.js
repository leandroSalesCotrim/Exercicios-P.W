function confirmarDelete(id){
  $confirmar = window.confirm("Aperte em 'ok' para excluir este dado");
  if($confirmar == true ){
      window.location.href='deletarPaciente.php?id='+id;            
      window.alert($codPaciente);
  }else if ($confirmar == false ){
      window.location.href='listarPaciente.php';
  }
}