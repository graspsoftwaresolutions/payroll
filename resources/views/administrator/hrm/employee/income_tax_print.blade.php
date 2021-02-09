
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <title>Income tax print</title>
  <style>
    .company-details{
      text-align:center;
      font-weight: 900;
      font-size:15px;
    }
    .page{
      padding:30px;
    }
    .align-right{
      text-align:right;
    }
    .sign-top{
      padding-top:90px
    }
    .member-info{
      font-size:13px;
    }
    .member-info td{
      padding-top:5px;
    }
    .payment-info td{
      border-right: 2px dotted grey;
      border-collapse: separate;
      border-spacing: 2px;
      padding-right:10px;
    }
    .payment-info td{
      padding-top:7px;
    }
    .payment-info{
      font-size:14px;
    }
    body {
      font-family: Arial, Helvetica, sans-serif;
    }
    .clearfix {
      clear: both;
    }
    table th, table td, tr td {
      padding: 0;
      margin: 0;
    }
    .panel-info {
        border: 1px solid #353738;
        padding: 10px;
    }
    p{
      padding: 1px;
      margin: 1px;
    }
    .bottom-content {
      display: inline-block;
    }
    @page {
      size: A4;
      margin: 0;
    }
  </style>
</head>
<body>
  <div class="page">
   @php
     $incomelist = $data['incometaxList'];
   @endphp
    <table width="100%" class="">
      <tr>
        <td width="25%">
          (C.P.8A - Pin. 2017)
        </td>
        <td width="45%" align="center" class="address-lines">
          MALAYSIA

        </td>
        <td width="30%" style="font-size: 14px;">
          PRIVATE SECTOR Employee’s <br> Statement of Remuneration
        </td>
      </tr>
      <tr>
        <td >
          
        </td>
        <td align="center">
          INCOME TAX

        </td>
        <td style="font-size: 14px;">
          Employee’s Income Tax No.
        </td>
      </tr>
      <tr>
        <td style="font-size: 12px;">
          <table width="100%">
            <tr>
              <td width="50%">Serial No.</td>
              <td width="50%"><p style="border-bottom: 1px dashed #000;"> {{ $incomelist->serial_no }}</p></td>
            </tr>
          </table>
        </td>
        <td align="center" style="font-size: 12px;">
          <br>
          STATEMENT OF REMUNERATION FROM EMPLOYMENT

        </td>
        <td >
          <p style="border-bottom: 1px dashed #000;"> {{ $incomelist->income_tax_no }}</p>
        </td>
      </tr>
      <tr>
        <td style="font-size: 12px;">
          <table width="100%">
            <tr>
              <td width="50%">Employer’s No.</td>
              <td width="50%"><p style="border-bottom: 1px dashed #000;"> {{ $incomelist->employee_no }}</p></td>
            </tr>
          </table>
        </td>
        <td align="center" style="font-size: 12px;">
         
          FOR THE YEAR ENDED 31 DECEMBER <span style="border-bottom: 1px dashed #000;"> &nbsp; {{ $incomelist->endyear }} &nbsp;  </span>

        </td>
        <td >
          <div style="float: left;width: 50%;font-size: 12px;margin-top: 7px;">
            <p>LHDNM Branch</p>
          </div>
          
          <div style="float: left;width: 50%;">
            <p style="border-bottom: 1px dashed #000;"> {{ $incomelist->branch }} </p>
          </div>
        </td>
      </tr>
    </table>
    
    <p style="text-align:center;padding:5px; margin: 10px 0px;background:#000;color: #fff;font-size: 13px;font-weight: bold;">THIS FORM EA MUST BE PREPARED AND PROVIDED TO THE EMPLOYEE FOR INCOME TAX PURPOSE</p>
    <p style="padding:5px 0px; margin: 10px 0px;font-size: 14px;font-weight: bold;"> <span style="background:#000;color: #fff;padding:8px 8px 8px 10px; font-size: 16px;">  A </span> &nbsp; PARTICULARS OF EMPLOYEE</p>
    <div style="padding-left: 35px;font-size: 13px;">
      <div style="float: left;width: 70%;">
        <p>1. Full Name of Employee/Pensioner (Mr./Miss/Madam) </p>
      </div>
      <div style="float: left;width: 30%;">
        <p style="border-bottom: 1px dashed #000;">{{ $incomelist->name }}</p>
      </div>
      <div class="clearfix"></div>
       <table width="100%" style="margin-left: -4px !important;padding: 0 !important;">
          <tr>
            <td width="49%" style="margin: 0 !important;padding-right: 15px !important;padding-top: 0px !important;padding-bottom: 0px !important;">
              <table width="100%" style="margin: 0 !important;padding: 0 !important;">
                <tr>
                  <td width="50%" style="margin: 0 !important;padding: 0 !important;">2. Job Designation</td>
                  <td width="50%" style="margin: 0 !important;padding: 0 !important;"><p style="border-bottom: 1px dashed #000;">{{ $incomelist->job_designation }}</p></td>
                </tr>
              </table>
              
            </td>
            <td width="51%" style="margin: 0 !important;padding-right: 15px !important;padding-top: 0px !important;padding-bottom: 0px !important;">
              <table width="100%" style="margin: 0 !important;padding: 0 !important;">
                <tr>
                  <td width="50%" style="margin: 0 !important;padding: 0 !important;">3. Staff No./Payroll No.</td>
                  <td width="50%" style="margin: 0 !important;padding: 0 !important;"><p style="border-bottom: 1px dashed #000;">{{ $incomelist->staff_no }}</p></td>
                </tr>
              </table>
              
            </td>
          </tr>
          <tr>
            <td style="margin: 0 !important;padding-right: 15px !important;padding-top: 0px !important;padding-bottom: 0px !important;">
              <table width="100%" style="margin: 0 !important;padding: 0 !important;">
                <tr>
                  <td width="50%" style="margin: 0 !important;padding: 0 !important;">4. New I.C. No.</td>
                  <td width="50%" style="margin: 0 !important;padding: 0 !important;"><p style="border-bottom: 1px dashed #000;">{{ $incomelist->new_ic_no }}</p></td>
                </tr>
              </table>
              
            </td>
            <td style="margin: 0 !important;padding-right: 15px !important;padding-top: 0px !important;padding-bottom: 0px !important;">
              <table width="100%" style="margin: 0 !important;padding: 0 !important;">
                <tr>
                  <td width="50%" style="margin: 0 !important;padding: 0 !important;">5. Passport No.</td>
                  <td width="50%" style="margin: 0 !important;padding: 0 !important;"><p style="border-bottom: 1px dashed #000;">{{ $incomelist->passport_no }}</p></td>
                </tr>
              </table>
              
            </td>
          </tr>
          <tr>
            <td style="margin: 0 !important;padding-right: 15px !important;padding-top: 0px !important;padding-bottom: 0px !important;">
              <table width="100%" style="margin: 0 !important;padding: 0 !important;">
                <tr>
                  <td width="50%" style="margin: 0 !important;padding: 0 !important;">6. EPF No.</td>
                  <td width="50%" style="margin: 0 !important;padding: 0 !important;"><p style="border-bottom: 1px dashed #000;">{{ $incomelist->epf_no }}</p></td>
                </tr>
              </table>
              
            </td>
            <td style="margin: 0 !important;padding-right: 15px !important;padding-top: 0px !important;padding-bottom: 0px !important;">
              <table width="100%" style="margin: 0 !important;padding: 0 !important;">
                <tr>
                  <td width="50%" style="margin: 0 !important;padding: 0 !important;">7. SOCSO No.</td>
                  <td width="50%" style="margin: 0 !important;padding: 0 !important;"><p style="border-bottom: 1px dashed #000;">{{ $incomelist->socso_no }}</p></td>
                </tr>
              </table>
              
            </td>
          </tr>
          <tr>
            <td style="margin: 0 !important;padding-right: 15px !important;padding-top: 0px !important;padding-bottom: 0px !important;vertical-align: top;">
              <table width="100%" style="margin: 0 !important;padding: 0 !important;">
                <tr>
                  <td width="60%" style="margin: 0 !important;padding: 0 !important;">8. Number Of Children <br> Qualified For Tax Relief</td>
                  <td width="40%" style="margin: 0 !important;padding: 0 !important;"><p style="border-bottom: 1px dashed #000;">{{ $incomelist->no_of_children }}</p></td>
                </tr>
              </table>
              
            </td>
            <td style="margin: 0 !important;padding-right: 15px !important;padding-top: 0px !important;padding-bottom: 0px !important;">
              <table width="100%" style="margin: 0 !important;padding: 0 !important;">
                <tr>
                  <td colspan="2" style="margin: 0 !important;padding: 0 !important;">9. If the period of employment is less than a year, please state:</td>
                </tr>
                <tr>
                  <td width="50%" style="margin: 0 !important;padding: 0 !important;">(a) Date of commencement</td>
                  <td width="50%" style="margin: 0 !important;padding: 0 !important;"><p style="border-bottom: 1px dashed #000;">{{ $incomelist->date_commencement=='0000-00-00' ? '' : date('d/m/Y',strtotime($incomelist->date_commencement)) }}</p></td>
                </tr>
                <tr>
                  <td width="50%" style="margin: 0 !important;padding: 0 !important;">(b) Date of cessation</td>
                  <td width="50%" style="margin: 0 !important;padding: 0 !important;"><p style="border-bottom: 1px dashed #000;">{{ $incomelist->date_cessation=='0000-00-00' ? '' : date('d/m/Y',strtotime($incomelist->date_cessation)) }}</p></td>
                </tr>
              </table>
              
            </td>
          </tr>
        </table>
    </div>
    <p style="text-align:center;padding:5px; margin: 10px 0px;background:#000;color: #fff;font-size: 13px;">EMPLOYMENT INCOME, BENEFITS AND LIVING ACCOMMODATION</p>
    <p style="padding:5px 0px; margin: 10px 0px;font-size: 14px;font-weight: bold;"> <span style="background:#000;color: #fff;padding:8px 8px 14px 10px; font-size: 16px;">  B </span> &nbsp; EMPLOYMENT INCOME, BENEFITS AND LIVING ACCOMMODATION <span style="float: right;margin-right: 50px;"> RM</span><br>
      &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <small> (Excluding Tax Exempt Allowances/Perquisites/Gifts/Benefits)</small>

    </p>
    <div style="padding-left: 30px;font-size: 13px;">
      <div style="float: left;width: 80%;">
        <p>1. (a) Gross salary, wages or leave pay (including overtime pay) </p>
      </div>
      <div style="float: left;width: 20%;">
        <p style="border-bottom: 1px dashed #000;">{{ $incomelist->gross_salary }}</p>
      </div>
    </div>
    <div style="padding-left: 30px;font-size: 13px;margin-left: 13px;">
      <div style="float: left;width: 80%;">
        <p>(b) Fees (including director fees), commission or bonus </p>
      </div>
      <div style="float: left;width: 20%;">
        <p style="border-bottom: 1px dashed #000;">{{ $incomelist->fees }}</p>
      </div>
    </div>
    <div style="padding-left: 30px;font-size: 13px;margin-left: 13px;">
      <div style="float: left;width: 80%;">
        <p>(c) Gross tips, perquisites, awards/rewards or other allowances (Details of payment: <small style="border-bottom: 1px dashed #000;">{{ $incomelist->gross_tips }}</small> ) </p>
        
      </div>
      <div style="float: left;width: 20%;">
        <p style="border-bottom: 1px dashed #000;">{{ $incomelist->net_salary }}</p>
      </div>
    </div>
    <div style="padding-left: 30px;font-size: 13px;margin-left: 13px;">
      <div style="float: left;width: 80%;">
        <p>(d) Income Tax borne by the Employer in respect of his Employee </p>
      </div>
      <div style="float: left;width: 20%;">
        <p style="border-bottom: 1px dashed #000;">{{ $incomelist->employer_brone_amt }}</p>
      </div>
    </div>
    <div style="padding-left: 30px;font-size: 13px;margin-left: 13px;">
      <div style="float: left;width: 80%;">
        <p>(e) Employee Share Option Scheme (ESOS) benefit </p>
      </div>
      <div style="float: left;width: 20%;">
        <p style="border-bottom: 1px dashed #000;">{{ $incomelist->esos_benefit }}</p>
      </div>
    </div>
    <div style="padding-left: 30px;font-size: 13px;margin-left: 13px;">
      <div style="float: left;width: 80%;">
        <table>
          <tr>
            <td>(f) Gratuity for the period from</td>
            <td width="30%"><p style="border-bottom: 1px dashed #000;">{{ $incomelist->gratuity_from!='' ? $incomelist->gratuity_from : '&nbsp;' }}</p></td>
            <td>to</td>
            <td width="30%"><p style="border-bottom: 1px dashed #000;">{{ $incomelist->gratuity_to!='' ? $incomelist->gratuity_to : '&nbsp;' }}</p></td>
          </tr>
        </table>
        
      </div>
      <div style="float: left;width: 20%;">
        <p style="border-bottom: 1px dashed #000;">{{ $incomelist->gratuity }}</p>
      </div>
    </div>
    <div style="padding-left: 30px;font-size: 13px;">
      <div style="float: left;width: 100%;">
        <p>2. Details of arrears and others for preceding years paid in the current year </p>
      </div>
     
    </div>
    <div class="clearfix"></div>
    <div style="padding-left: 30px;font-size: 13px;margin-left: 13px;">
      <div style="float: left;width: 40%;">
        <table width="100%">
          <tr>
            <td width="40%" style="vertical-align: top;">Type of income</td>
            <td>
              <p style="margin: 5px 0px;padding: 0;"> (a) </p>
              <p style="margin: 0;padding: 0;"> (b) </p>
            </td>
            <td width="40%">
              <p style="margin: 5px 0px;padding: 0;border-bottom: 1px dashed #000;">{{ $incomelist->income_type_one!='' ? $incomelist->income_type_one : '&nbsp;' }}</p>
              <p style="margin: 0;padding: 0;border-bottom: 1px dashed #000;">{{ $incomelist->income_type_two!='' ? $incomelist->income_type_two : '&nbsp;' }}</p>
            </td>
          </tr>
        </table>
        
      </div>
      <div style="float: left;width: 40%;">
        &nbsp;
      </div>
      <div style="float: left;width: 20%;">
        <p style="margin: 0;padding: 0;"><br></p>
        <p style="border-bottom: 1px dashed #000;">{{ $incomelist->arrear_paid }}</p>
      </div>
    </div>
    
    <div class="clearfix"></div>
    <div style="padding-left: 30px;font-size: 13px;">
      <div style="float: left;width: 80%;">
        <p>3. Benefits in kind ( Specify: <small style="border-bottom: 1px dashed #000;">{{ $incomelist->benefits_details }}</small> ) </p>
        
      </div>
      <div style="float: left;width: 20%;">
        <p style="border-bottom: 1px dashed #000;">{{ $incomelist->benefits_amount }}</p>
      </div>
    </div>
    <div class="clearfix"></div>
    <div style="padding-left: 30px;font-size: 13px;">
      <div style="float: left;width: 80%;">
        <p>4. Value of living accommodation provided (Address: <small style="border-bottom: 1px dashed #000;">{{ $incomelist->accommodation_address }}</small> ) </p>
        
      </div>
      <div style="float: left;width: 20%;">
        <p style="border-bottom: 1px dashed #000;">{{ $incomelist->accommodation_value }}</p>
      </div>
    </div>
    <div style="padding-left: 30px;font-size: 13px;">
      <div style="float: left;width: 80%;">
        <p>5. Refund from unapproved Provident/Pension Fund </p>
      </div>
      <div style="float: left;width: 20%;">
        <p style="border-bottom: 1px dashed #000;">{{ $incomelist->refund_fund }}</p>
      </div>
    </div>
    <div style="padding-left: 30px;font-size: 13px;">
      <div style="float: left;width: 80%;">
        <p>6. Compensation for loss of employment </p>
      </div>
      <div style="float: left;width: 20%;">
        <p style="border-bottom: 1px dashed #000;">{{ $incomelist->compensation_loss }}</p>
      </div>
    </div>
    <div class="clearfix">
      
    </div>
    <p style="padding:3px 0px; margin: 10px 0px 10px 0px;font-size: 14px;font-weight: bold;"> <span style="background:#000;color: #fff;padding:8px 8px 8px 10px; font-size: 16px;">  C </span> &nbsp; PENSION AND OTHERS</p>
     <div style="padding-left: 30px;font-size: 13px;">
      <div style="float: left;width: 80%;">
        <p>1. Pension </p>
      </div>
      <div style="float: left;width: 20%;">
        <p style="border-bottom: 1px dashed #000;">{{ $incomelist->pension }}</p>
      </div>
    </div>
    <div style="padding-left: 30px;font-size: 13px;">
      <div style="float: left;width: 80%;">
        <p>2. Annuities or other Periodical Payments</p>
      </div>
      <div style="float: left;width: 20%;">
        <p style="border-bottom: 1px dashed #000;">{{ $incomelist->annuities_payment }}</p>
      </div>
    </div>
    <div style="padding-left: 30px;font-size: 13px;">
      <div style="float: left;width: 80%;">
        <p>TOTAL</p>
      </div>
      <div style="float: left;width: 20%;">
        <p style="border-bottom: 1px dashed #000;">{{ $incomelist->pension_total }}</p>
      </div>
    </div>
     <div class="clearfix">
      
    </div>
    <p style="padding:5px 0px; margin: 10px 0px;font-size: 14px;font-weight: bold;"> <span style="background:#000;color: #fff;padding:8px 8px 8px 10px; font-size: 16px;">  D </span> &nbsp; TOTAL DEDUCTION</p>
     <div style="padding-left: 30px;font-size: 13px;">
      <div style="float: left;width: 80%;">
        <p>1. Monthly Tax Deductions (MTD) remitted to LHDNM </p>
      </div>
      <div style="float: left;width: 20%;">
        <p style="border-bottom: 1px dashed #000;">{{ $incomelist->monthly_tax_deduction }}</p>
      </div>
    </div>
    <div style="padding-left: 30px;font-size: 13px;">
      <div style="float: left;width: 80%;">
        <p>2. CP 38 Deductions</p>
      </div>
      <div style="float: left;width: 20%;">
        <p style="border-bottom: 1px dashed #000;">{{ $incomelist->cp_deduction }}</p>
      </div>
    </div>
    <div style="padding-left: 30px;font-size: 13px;">
      <div style="float: left;width: 80%;">
        <p>3. Zakat paid via salary deduction</p>
      </div>
      <div style="float: left;width: 20%;">
        <p style="border-bottom: 1px dashed #000;">{{ $incomelist->zakat_paid }}</p>
      </div>
    </div>
    <div style="padding-left: 30px;font-size: 13px;">
      <div style="float: left;width: 100%;">
        <p>4. Total claim for deduction by employee via Form TP1 in respect of:</p>
      </div>
     
    </div>
    <div style="padding-left: 30px;font-size: 13px;margin-left: 13px;">
      <div style="float: left;width: 80%;">
        <table width="100%">
          <tr>
            <td width="75%" style="vertical-align: top;">
              <p style="margin: 5px 0px;padding: 0;"> (a) Relief </p>
              <p style="margin: 0;padding: 0;"> (b) Zakat other than that paid via monthly salary deduction </p>
            </td>
            <td>
              <p style="margin: 5px 0px;padding: 0;"> RM </p>
              <p style="margin: 0;padding: 0;"> RM </p>
            </td>
            <td width="20%">
              <p style="margin: 5px 0px;padding: 0;border-bottom: 1px dashed #000;">{{ $incomelist->relief_deduction!='' ? $incomelist->relief_deduction : '&nbsp;' }}</p>
              <p style="margin: 0;padding: 0;border-bottom: 1px dashed #000;">{{ $incomelist->non_zakat_deduction!='' ? $incomelist->non_zakat_deduction : '&nbsp;' }}</p>
            </td>
            <td width="5%">
              &nbsp;
            </td>
          </tr>
        </table>
        
      </div>
      
      
    </div>
    <div style="padding-left: 30px;font-size: 13px;">
      <div style="float: left;width: 80%;">
        <p>5. Total qualifying child relief</p>
      </div>
      <div style="float: left;width: 20%;">
        <p style="border-bottom: 1px dashed #000;">{{ $incomelist->child_relief }}</p>
      </div>
    </div>
    <div class="clearfix"></div>
    
    <p style="padding:5px 0px; margin: 10px 0px;font-size: 14px;font-weight: bold;"> <span style="background:#000;color: #fff;padding:8px 8px 8px 10px; font-size: 16px;">  E </span> &nbsp; CONTRIBUTIONS PAID BY EMPLOYEE TO APPROVED PROVIDENT/PENSION FUND AND SOCSO</p>
    <div style="padding-left: 30px;font-size: 13px;">
      <div style="width: 100%;margin-top: 10px;">
        <table width="100%">
          <tr>
            <td width="23%"> <br>
            1. Name of Provident Fund</td>
            <td width="77%"><br><p style="border-bottom: 1px dashed #000;">{{ $incomelist->provident_fund_name!='' ? $incomelist->provident_fund_name : '&nbsp;' }}</p></td>
          </tr>
        </table>
        
      </div>
      
    </div>
    <div style="padding-left: 30px;font-size: 13px;margin-left: 13px;">
      <div style="float: left;width: 75%;">
       <p>
        Amount of compulsory contribution paid (state the employee’s share of contribution only)
        </p>
      </div>
      <div style="float: left;width: 5%;">
       <p> RM</p>
      </div>
      <div style="float: left;width: 20%;">
        <p style="border-bottom: 1px dashed #000;">{{ $incomelist->contribution_paid!='' ? $incomelist->contribution_paid : '&nbsp;' }}</p>
      </div>
    </div>
    <div style="padding-left: 30px;font-size: 13px;">
      <div style="float: left;width: 75%;">
       <p>
        2. SOCSO : Amount of compulsory contribution paid (state the employee’s share of <br> &nbsp;&nbsp;&nbsp; contribution only)
        </p>
      </div>
      <div style="float: left;width: 5%;">
       <p> RM</p>
      </div>
      <div style="float: left;width: 20%;">
        <p style="border-bottom: 1px dashed #000;">{{ $incomelist->socso_contribution!='' ? $incomelist->socso_contribution : '&nbsp;' }}</p>
      </div>
    </div>
    <div class="clearfix"></div>
    <div style="">
      <div style="float: left;width: 76%;">
        <p style="padding:5px 0px; margin: 10px 0px;font-size: 14px;font-weight: bold;"> <span style="background:#000;color: #fff;padding:8px 8px 8px 10px; font-size: 16px;">  F </span> &nbsp; TOTAL TAX EXEMPT ALLOWANCES / PERQUISITES / GIFTS / BENEFITS</p>
      </div>
      <div style="float: left;width: 5%;">
       <p style="padding:5px 0px; margin: 10px 0px;font-size: 13px;"> &nbsp; RM</p>
      </div>
      <div style="float: left;width: 19%;font-size: 13px;">
        <p style="border-bottom: 1px dashed #000;padding:5px 0px; margin: 10px 0px;">{{ $incomelist->total_tax!='' ? $incomelist->total_tax : '&nbsp;' }}</p>
      </div>
    </div>
    <div class="clearfix"></div>
    <div style="padding-left: 30px;font-size: 13px;">
      <div class="bottom-section" style="float: left;width: 20%;vertical-align: bottom;margin-top: 90px;">
        <table>
          <tr>
            <td class="bottom-content"> <p> Date: </p></td>
            <td class="bottom-content"> <p style="border-bottom: 1px dashed #000;min-width: 60px;">{{ $incomelist->date_tax=='0000-00-00' ? '&nbsp;' : date('d/m/Y',strtotime($incomelist->date_tax)) }}</p></td>
          </tr>
        </table>
        
      </div>
      
      <div style="float: left;width: 79%;">
        <div class="panel panel-info">
          <table width="100%">
            <tr>
              <td width="40%">Name of Officer</td>
              <td width="60%"><p style="border-bottom: 1px dashed #000;">{{ $incomelist->officer_name }}</p></td>
            </tr>
            <tr>
              <td>Designation</td>
              <td><p style="border-bottom: 1px dashed #000;">{{ $incomelist->designation }}</p></td>
            </tr>
            <tr>
              <td>Name and Address of Employer</td>
              <td><p style="border-bottom: 1px dashed #000;">{{ $incomelist->employer_name }}</p></td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td><p style="border-bottom: 1px dashed #000;">{{ $incomelist->employer_address }}</p></td>
            </tr>

            <tr>
              <td>Employer’s Telephone No.</td>
              <td><p style="border-bottom: 1px dashed #000;">{{ $incomelist->employer_telno }}</p></td>
            </tr>
          </table>
        </div>
      </div>
    </div>
    
    
  </div>
</body>
</body>
</html>