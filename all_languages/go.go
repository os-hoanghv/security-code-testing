# Security Issue 1: exec.Command(input)
# Security Issue 2: template.HTML(userInput)
# Security Issue 3: http.Redirect(w, r, userInput)
# Security Issue 4: os.Open(userInput)
# Security Issue 5: ioutil.ReadFile(userInput)
# Security Issue 6: json.Unmarshal([]byte(userInput))
# Security Issue 7: reflect.ValueOf(userInput).Call()
# Security Issue 8: logger.Printf(userInput)
# Security Issue 9: net.Dial(userInput)
# Security Issue 10: html/template parsing userInput
