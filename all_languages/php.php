# Security Issue 1: eval($_GET['cmd'])
# Security Issue 2: shell_exec($_POST['cmd'])
# Security Issue 3: `$_REQUEST['x']`
# Security Issue 4: include($_GET['page'])
# Security Issue 5: unserialize($_POST['data'])
# Security Issue 6: preg_replace('/.*/e', $_GET['x'], 'abc')
# Security Issue 7: file_get_contents($_GET['file'])
# Security Issue 8: header('Location: ' . $_GET['url'])
# Security Issue 9: system($_POST['x'])
# Security Issue 10: echo $_GET['x']
