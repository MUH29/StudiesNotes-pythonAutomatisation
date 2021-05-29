import win32com.client as win32

# Program extracting all columns
# name in Python
import xlrd
 
loc = (r"C:\Users\Reda El Ouahabi\Downloads\contacts\gestionnaire.xls")
# To open Workbook 
wb = xlrd.open_workbook(loc)
sheet = wb.sheet_by_index(0)
 
# For row 0 and column 0
# sheet.cell_value(0, 0)
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
    mail.HTMLBody = '''
    <p>Bonjour'''+Firsst + ''' </p>
    <div>
    <div>
    <div>
    <div>
    <div>
    <div>
    <div>
    <div>J'esp&egrave;re que vous allez tr&egrave;s bien.</div>
    <div>&nbsp;</div>
    Je m'appelle EL OUAHABI Reda,&nbsp;<strong>&eacute;tudiant en 2</strong><strong><sup>eme&nbsp;</sup></strong><strong>ann&eacute;e G&eacute;nie Informatique</strong>, &agrave; 
    l'Ecole Mohammadia d'ing&eacute;nieurs,</div>
    </div>
    </div>
    </div>
    <div>
    <div>
    <div>&nbsp;</div>
    <div>Je&nbsp;suis &agrave; la recherche d'un stage d'application de deux mois &agrave; partir du mois 1<sup>er</sup>&nbsp;juillet
     dans le domaine de&nbsp;<strong>d&eacute;veloppement WEB /Full stack - DEV Mobile - Desktop.</strong></div>
    <div>&nbsp;</div>
    <div>&nbsp;</div>
    </div>
    </div>
    <div>
    <div>Si vous avez des opportunit&eacute;s de stages a me proposer au sein de votre entreprise : "'''+sheet.cell_value(i, 3) + '''", n'h&eacute;sitez pas &agrave; me contacter.</div>
    <div>Vous trouverez attach&eacute; ci-joint mon&nbsp;CV, ainsi que ma lettre de motivation.
    <div>&nbsp;</div>
    <div><strong><u>Site Web :</u></strong>&nbsp; &nbsp;&nbsp;<a href="https://reda-elouahabi.github.io/Portfolio/" target="_blank" 
    rel="noopener noreferrer" data-auth="NotApplicable" data-linkindex="0">https://reda-elouahabi.github.io/Portfolio/</a>
    <div>&nbsp;</div>
    <div><strong><u>LinkedIn :</u></strong>&nbsp; &nbsp; &nbsp;&nbsp;<a href="https://www.linkedin.com/in/reda-el-ouahabi-181451189/" target="_blank" 
    rel="noopener noreferrer" data-auth="NotApplicable" data-linkindex="1">https://www.linkedin.com/in/reda-el-ouahabi-181451189/</a></div>
    <div>&nbsp;</div>
    <strong><u>GitHub :&nbsp;</u>&nbsp;&nbsp; &nbsp; &nbsp;&nbsp;</strong>&nbsp;<a href="https://github.com/reda-ELOUAHABI/" target="_blank" rel="noopener noreferrer" 
    data-auth="NotApplicable" data-linkindex="2">https://github.com/reda-ELOUAHABI/</a></div>
    </div>
    <div>&nbsp;</div>
    <div>Je reste &agrave; votre disposition,&nbsp;Si vous avez besoin d'informations suppl&eacute;mentaires,</div>
    <div>Je vous remercie infiniment pour votre temps.
    <div>
    <div>Veuillez agr&eacute;er mes respectueuses salutations&nbsp;et je vous souhaite une excellente journ&eacute;e,</div>
    <p><strong>Cordialement,</strong></p>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    
    '''
    
    #this field is optional
    print(mail.HTMLBody)
    print(sheet.cell_value(i, 2))
    print(mail.Subject)
    # To attach a file to the email (optional):
    attachment  = "E:\Reda\Portofolio\Portfolio\CV\photos\EL_OUAHABI_Reda_CV_FR.pdf"
    mail.Attachments.Add(attachment)

    attachment  = "E:\Reda\Portofolio\Portfolio\CV\photos\EL_OUAHABI_Reda_Motivation.pdf"
    mail.Attachments.Add(attachment)
    mail.Send()