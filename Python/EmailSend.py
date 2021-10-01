import win32com.client as win32

# Program extracting all columns
# name in Python
import xlrd
 
loc = (r"PATH_ABS_.xls")
# To open Workbook 
wb = xlrd.open_workbook(loc)
sheet = wb.sheet_by_index(0)
 
# For row i and column j
# sheet.cell_value(i, j)
Firsst=" "
for i in range(1,2):
    outlook = win32.Dispatch('outlook.application')
    mail = outlook.CreateItem(0)
    mail.To = sheet.cell_value(i, 2)
    mail.Subject = 'Stage PFA _'+sheet.cell_value(i, 3)
    if(sheet.cell_value(i, 1)=='F'):
       Firsst=" Madame  "+sheet.cell_value(i, 0)+","
    if(sheet.cell_value(i, 1)=='M'):
       Firsst=" Monsieur  "+sheet.cell_value(i, 0)+","
    if(sheet.cell_value(i, 1)=='I'):
       Firsst=","
    mail.HTMLBody = ''' <p>Bonjour YOUR MESSAGE '''+Firsst + ''' </p> '''
    
    #this field is optional
    print(mail.HTMLBody)
    print(sheet.cell_value(i, 2))
    print(mail.Subject)
    # To attach a file to the email (optional):
    attachment  = "PATH_ABSOLUTE_CV_FR.pdf"
    mail.Attachments.Add(attachment)

    attachment  = "PATH_ABS_Motivation.pdf"
    mail.Attachments.Add(attachment)
    mail.Send()