let counter = 1;
let actionTr = document.getElementById('action-tr-'+counter);
while(actionTr != null) {
  const editBtn = actionTr.children[5].firstElementChild;
  const deleteBtn = actionTr.children[5].lastElementChild;
  editBtn.addEventListener('click', handleEditClick);
  deleteBtn.addEventListener('click', handleDeleteClick);
  counter++;
  actionTr = document.getElementById('action-tr-'+counter);
}

function handleEditClick(e) {
  const tr = e.target.parentElement.parentElement;
  const nameId = tr.children[0].innerHTML;
  const lastname = tr.children[1].innerHTML;
  const firstname = tr.children[2].innerHTML;
  const middlename = tr.children[3].innerHTML;
  const suffix = tr.children[4].innerHTML;
  setEditForm(nameId, lastname, firstname, middlename, suffix);
}

function handleDeleteClick(e) {
  const tr = e.target.parentElement.parentElement;
  const nameId = tr.children[0].innerHTML;
  setDeleteForm(nameId);
}

function setEditForm(nameId, lastname, firstname, middlename, suffix) {
  const editIdInput = document.getElementById('edit-name-id');
  const editLastnameInput = document.getElementById('edit-lastname');
  const editFirstnameInput = document.getElementById('edit-firstname');
  const editMiddlenameInput = document.getElementById('edit-middlename');
  const editSuffixInput = document.getElementById('edit-suffix');
  
  editIdInput.value = nameId;
  editLastnameInput.value = lastname;
  editFirstnameInput.value = firstname;
  editMiddlenameInput.value = middlename;
  editSuffixInput.value = suffix;
}

function setDeleteForm(nameId) {
  const deleteIdInput = document.getElementById('delete-name-id');
  deleteIdInput.value = nameId;
}