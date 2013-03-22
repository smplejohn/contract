<!doctype html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <style>
      /* Stuff that won't be seen when printed */
      .holder {display:block; background:#eee; border-bottom:#333 1px solid; box-shadow:0 0 4px #eee; padding:20px}
        .holder h3 {margin-bottom:0}
        form {width:980px; margin:0 auto}
          label {display:block; padding-top:5px}
          input[type=submit] {margin-top:10px; border:#888 1px solid; border-radius:4px; padding:5px 8px; cursor:pointer; box-shadow:1px 1px 0 #333; background:#fff; position:relative; top:-1px; left:-1px}
            input[type=submit]:active {background:#eee; top:0; left:0; box-shadow:none}
          textarea {width:900px; height:100px}

      /* Stuff that will be seen when printed */
        body {font-size:.8em}
        ol li ol {list-style-type:lower-roman}
        .left {float:left}
        .right {float:right}
        .clear {clear:both}
        .clientDetails {width:100%}
          .clientDetails strong {display:block; width:150px; float:left}
        .signatures {width:100%; margin:50px auto 0}
          .signatures td {border-top:#000 1px solid; padding:0 2% 40px; width:46%}

      /* User added CSS */
        <?php echo $_POST['addtCSS']; ?>

      /* Make it print well */
        @media print {
          .holder {display:none}
          .break {display:block; page-break-before:always; clear:both}
        }
    </style>
  </head>
  <body>
    <div class='holder'>
      <form action='contract.php' method='post'>
        <h1>The "Use At Your Own Risk We Are Not Held Liable" Contract Generator</h1>
        <p>Hey all, a long time ago, Reddit user <a href='http://www.reddit.com/user/surfwax95'>surfwax95</a> was so kind as to post a kick-ass sample contract for other web guys to use. I <a href='http://www.reddit.com/r/web_design/comments/asm5f/hey_rweb_design_would_anyone_be_nice_enough_to/c0j7lcx'>mentioned</a> turning it into a template based document other's could use for their web clients. I know it's been awhile, but I'm deliverying 3 years later. (Got busy and what not.)</p>
        <p><strong>Enjoy!</strong> If you have any questions/suggestions, <a href='http://www.reddit.com/user/smplejohn'>shoot me a PM</a>.</p>
        <p>Oh, and this whole form and text section won't show when you print it.</p>
        <p><strong><a href='Sample Contract.pdf'>Here is a sample of the printed contract.</a></strong></p>
        <hr />
        <h1>Fill Out This Form</h1>
        <h3>Contract Date</h3>
        <div class='left'>
          <label>Contract Day</label>
          <input type='text' name='d' value='<?php echo date('jS',time()); ?>' />
        </div>
        <div class='left'>
          <label>Contract Month</label>
          <input type='text' name='m' value='<?php echo date('F',time()); ?>' />
        </div>
        <div class='left'>
          <label>Contract Year</label>
          <input type='text' name='y' value='<?php echo date('Y',time()); ?>' />
        </div>

        <br class='clear' />

        <h3>Your Information</h3>
        <div class='left'>
          <label>Name or Business</label>
          <input type='text' name='yourName' value='<?php echo $_POST['yourName']; ?>' />
        </div>
        <div class='left'>
          <label>Street Address</label>
          <input type='text' name='yourAddress' value='<?php echo $_POST['yourAddress']; ?>' />
        </div>
        <div class='left'>
          <label>City</label>
          <input type='text' name='yourCity' value='<?php echo $_POST['yourCity']; ?>' />
        </div>
        <div class='left'>
          <label>State</label>
          <input type='text' name='yourState' value='<?php echo $_POST['yourState']; ?>' />
        </div>
        <div class='left'>
          <label>Zip</label>
          <input type='text' name='yourZip' value='<?php echo $_POST['yourZip']; ?>' />
        </div>
        <div class='left'>
          <label>County</label>
          <input type='text' name='yourCounty' value='<?php echo $_POST['yourCounty']; ?>' />
        </div>

        <br class='clear' />

        <h3>Client Information</h3>
        <div class='left'>
          <label>Contact Name</label>
          <input type='text' name='clientName' value='<?php echo $_POST['clientName']; ?>' />
        </div>
        <div class='left'>
          <label>Business Name</label>
          <input type='text' name='businessName' value='<?php echo $_POST['businessName']; ?>' />
        </div>
        <div class='left'>
          <label>Phone</label>
          <input type='text' name='clientPhone' value='<?php echo $_POST['clientPhone']; ?>' />
        </div>
        <div class='left'>
          <label>Fax</label>
          <input type='text' name='clientFax' value='<?php echo $_POST['clientFax']; ?>' />
        </div>
        <div class='left'>
          <label>Email</label>
          <input type='text' name='clientEmail' value='<?php echo $_POST['clientEmail']; ?>' />
        </div>
        <br class='clear' />
        <div class='left'>
          <label>Current Website</label>
          <input type='text' name='clientWebsite' value='<?php echo $_POST['clientWebsite']; ?>' />
        </div>
        <div class='left'>
          <label>Street Address</label>
          <input type='text' name='clientAddress' value='<?php echo $_POST['clientAddress']; ?>' />
        </div>
        <div class='left'>
          <label>City</label>
          <input type='text' name='clientCity' value='<?php echo $_POST['clientCity']; ?>' />
        </div>
        <div class='left'>
          <label>State</label>
          <input type='text' name='clientState' value='<?php echo $_POST['clientState']; ?>' />
        </div>
        <div class='left'>
          <label>Zip</label>
          <input type='text' name='clientZip' value='<?php echo $_POST['clientZip']; ?>' />
        </div>

        <br class='clear' />

        <h3>Additional CSS</h3>
        <label>Add your own style here, i.e. "body {font:normal normal 12px Verdana}"</label>
        <textarea name='addtCSS' id='addtCSS'><?php echo $_POST['addtCSS']; ?></textarea>

        <br class='clear' />
        <h3>Customizable Blocks</h3>

        <label>Payment plan</label>
        <textarea name='paymentPlan'>
<?php if(isset($_POST['paymentPlan'])){echo $_POST['paymentPlan'];} else {; ?>
<ul>
  <li>30% upon signing of contract</li>
  <li>30% after first stage of site is completed and approved</li>
  <li>remaining balance due upon completion, but prior to exchange of final product</li>
</ul>
          <?php } ?>
        </textarea>
        
        <label>"Stages" you want to use to complete work</label>
        <textarea name='workOrder'>
<?php if(isset($_POST['workOrder'])){echo $_POST['workOrder'];} else {; ?>
<ul>
  <li>Mock Ups - Basic gray-box layout and content presentation.</li>
  <li>Design - Stage 1: Non-interactive, full-color, image mockup.</li>
  <li>Design - Stage 2: After approval, changes will be made to Stage 1.</li>
  <li>Client Approval: Approve, in writing, Design Stage 2.</li>
  <li>Coding Stage: Final design coded and optimized for the web.</li>
  <li>Completion: Review and approve once more.</li>
  <li>Testing Stage: Completed site tested on all major browsers.</li>
  <li>Launch: The site goes live.</li>
</ul>
          <?php } ?>
        </textarea>

        <br class='clear' />

        <input type='hidden' name='generateContract' value='1' />
        <input type='submit' value='Submit Information and Generate Contract' />
      </form>
    </div><!-- .holder -->


    <?php if(isset($_POST['generateContract'])){ ?>
      <p>This Contract is made this <?php echo $_POST['d']; ?> day of <?php echo $_POST['m']; ?>, <?php echo $_POST['y']; ?>, between <?php echo $_POST['yourName']; ?> and CLIENT, identified as follows:</p>
      <table class='clientDetails'>
        <tr>
          <td><strong>Name:</strong> <?php echo $_POST['clientName']; ?></td>
          <td><strong>Business Name:</strong> <?php echo $_POST['businessName']; ?></td>
        </tr>
        <tr>
          <td><strong>Address:</strong> <?php echo $_POST['clientAddress']; ?></td>
          <td><strong>Phone:</strong> <?php echo $_POST['clientPhone']; ?></td>
        </tr>
        <tr>
          <td><strong>City:</strong> <?php echo $_POST['clientCity']; ?></td>
          <td><strong>Fax:</strong> <?php echo $_POST['clientFax']; ?></td>
        </tr>
        <tr>
          <td><strong>State:</strong> <?php echo $_POST['clientState']; ?></td>
          <td><strong>Email:</strong> <?php echo $_POST['clientEmail']; ?></td>
        </tr>
        <tr>
          <td><strong>Zip:</strong> <?php echo $_POST['clientZip']; ?></td>
          <td><strong>Current Website:</strong> <?php echo $_POST['clientWebsite']; ?></td>
        </tr>
      </table>

      <br class='break' />

      <p>These are the terms of our agreement together:</p>

      <ol>
        <li>
          <strong>AUTHORIZATION</strong>
          <ol>
            <li><p>Authorization. The above-named Client is engaging <?php echo $_POST['yourName']; ?>, a(n) <?php echo $_POST['yourState']; ?> general partnership located at <?php echo $_POST['yourAddress']; ?>, <?php echo $_POST['yourCity']; ?>, <?php echo $_POST['yourState']; ?>, <?php echo $_POST['yourZip']; ?>, as an independent contractor for the specific purpose of performing the project work described in detail in the attached Design Quote attached as Appendix A ("the Project"). If Client already has a hosting account, Client hereby authorizes <?php echo $_POST['yourName']; ?> to access its FTP account, and authorizes the web hosting service to provide <?php echo $_POST['yourName']; ?> with administrator access to the Client's web page directory, cgi-bin directory, and any other directories or programs which need to be accessed for the Project. Client shall provide <?php echo $_POST['yourName']; ?> with the user ID and password for its internet access account. Client also authorizes <?php echo $_POST['yourName']; ?> to publicize its completed website to Web search engines, as well as other Web directories and indices.</p></li>
          </ol>
        </li><!-- Authorization -->

        <li>
          <strong>FEES AND EXPENSES</strong>
          <ol>
            <li><p>Billable Expenses: Client agrees to reimburse <?php echo $_POST['yourName']; ?> for all direct and indirect Billable Expenses arising from the Project, regardless of whether the assignment is Cancelled or Terminated. Billable Expenses include but are not limited to costs of purchasing specific fonts or photography requested by Client, hosting, commissioning images or voice talent, software or run-time license costs, the payment of any sales tax due on this assignment, travel, research, postage, and delivery, photocopying, and storage media expenses.</p></li>
            <li>
              <p>Payment of Fees. Unless otherwise agreed by separate written agreement signed by both parties, a minimum deposit of thirty percent (30%) of the total cost for the Project is required to commence work. <?php echo $_POST['yourName']; ?> reserves the right to not begin work on the Project until the initial deposit has been paid in full.</p>
              <p>Fees to <?php echo $_POST['yourName']; ?> are due and payable on the following schedule:</p>
              <!-- CHANGE THIS SECTION TO WHATEVER THE PERCENTAGES ARE THE USER WANTS -->
              <?php echo $_POST['paymentPlan']; ?>
              <p>If the total amount of this Contract is less than $800.00, the total amount shall be paid upon signing of the Contract, and any additional costs incurred during development will be invoiced at the completion of the website. Advertising the pages to Web Search Engines and updating will occur only after the final payment is received by <?php echo $_POST['yourName']; ?>. All payments will be made in US funds. <?php echo $_POST['yourName']; ?> reserves the right to remove web pages from viewing on the Internet until final payment is made. If a payment delay is anticipated, please contact <?php echo $_POST['yourName']; ?> immediately for an alternative arrangement. In the event collection proves necessary, Client agrees to pay all fees incurred by <?php echo $_POST['yourName']; ?> for that process. The Contract becomes effective only when signed by <?php echo $_POST['yourName']; ?>. Regardless of the place of signing this Contract, Client agrees that for purposes of venue, this Contract was entered into in <?php echo $_POST['yourCounty']; ?>, <?php echo $_POST['yourState']; ?>, and any dispute will be litigated in <?php echo $_POST['yourCounty']; ?>, <?php echo $_POST['yourState']; ?>.</p>
            </li>
          </ol>
        </li><!-- Fees and Expenses -->

        <li>
          <strong>COMPLETION OF PROJECT</strong>
          <ol>
            <li><p>Completion of the Project. <?php echo $_POST['yourName']; ?> warrants completing the Project as agreed with Client, and will not charge more than the amount agreed upon in the Design Quote (Appendix A) unless Client has varied the specifications of the Project subsequent to the Contract. <?php echo $_POST['yourName']; ?> will not undertake changes to the specifications of the Project which would increase the cost, without prior written authorization from Client.</p></li>
            <li><p>Supply of Materials. Client agrees to supply all materials and information required for <?php echo $_POST['yourName']; ?> to complete the Project in accordance with the Design Quote (Appendix A). Such materials may include, but are not limited to, photographs, written copy, logos, and other printed materials. Where Client's failure to supply such materials leads to a delay in completion of the Project, <?php echo $_POST['yourName']; ?> has the right to extend previously agreed deadlines for the completion of the Project by a reasonable period of time. Where Client's failure to supply materials prevents progress on the Project for more than 21 days, <?php echo $_POST['yourName']; ?> has the right to invoice Client for any part or parts of the Project already completed.</p></li>
            <li><p>Approval of Work. On completion of the Project, Client will be notified and will have the opportunity to review it. Client should notify <?php echo $_POST['yourName']; ?> in writing of any unsatisfactory points within 7 days of receipt of such notification. Any part of the Project which has not been reported in writing to <?php echo $_POST['yourName']; ?> as unsatisfactory within the 7-day review period will be deemed to have been approved. Once approved, or deemed approved, work cannot subsequently be rejected, and the Contract will be deemed to have been completed, and all remaining sums due to <?php echo $_POST['yourName']; ?> under the Contract will become due. The Contract will remain in effect until all obligations have been completed in terms of this clause.</p></li>
            <li><p>Rejected Work. If Client rejects the Project within the 7-day review period, or will not approve subsequent work on the Project performed by <?php echo $_POST['yourName']; ?> to remedy any points reported by Client as unsatisfactory, and <?php echo $_POST['yourName']; ?> considers that Client is unreasonable in its repeated rejection of the Project, the Contract will be deemed to have expired and <?php echo $_POST['yourName']; ?> can take any legal measures to recover both payment for the completed work on the Project and reasonable expenses incurred in recovering payment.</p></li>
            <li>
              <p>Client's Alterations: There shall be no charges to Client for revisions or corrections or additions made necessary by errors on the part of <?php echo $_POST['yourName']; ?>. Any other changes requested by Client shall be considered Client's Alterations if they are requested after acceptance of the Design Quote (Appendix A). <?php echo $_POST['yourName']; ?> will bill at its standard hourly rate for correction of errors for which <?php echo $_POST['yourName']; ?> is not responsible, including, but not limited to, malicious modification of the website by a third party and typographical errors contained in materials provided to <?php echo $_POST['yourName']; ?> by Client. Client shall be responsible for making additional payments at <?php echo $_POST['yourName']; ?>'s hourly rate for any Client's Alterations and any other changes in original assignment requested by Client. Client shall offer <?php echo $_POST['yourName']; ?> the first opportunity to make any changes to the website. <?php echo $_POST['yourName']; ?> understands that Client may request significant design changes to pages that have already been built to Client's specification. Please note that this Contract does not include a provision for significant page modification or creation of additional pages in excess of our agreed page maximum. If significant page modification is requested after a page has been built to Client's specifications, <?php echo $_POST['yourName']; ?> must count it as an additional page. Some examples of significant page modification at Client's request:</p>
              <ul>
                <li>Developing a new grid structure to accommodate a substantial redesign.</li>
                <li>Recreating or significantly modifying the company logo graphic.</li>
                <li>Replacing more than 50% of the text to any given page.</li>
                <li>Creating a new navigation structure or changing the link graphics.</li>
              </ul>
              <p>Clients who anticipate frequently changing the look of their site during the design process and Clients who desire to be intricately involved in design of each page are encouraged to negotiate an agreement that exceeds the page maximum. If significant page modification is requested by Client after the page maximum has been reached, a Change Request with estimated costs will be submitted for Client approval prior to changes being made. Small changes will always be covered during <?php echo $_POST['yourName']; ?>'s development of the website and also covered by <?php echo $_POST['yourName']; ?>'s 60 day warranty/free maintenance.</p>
            </li>
            <li><p>Third Party or Client Page Modification. Some Clients will desire to independently edit or update their web pages after completion of the site. <?php echo $_POST['yourName']; ?> is not responsible for any damage created by Client or Client's agent. Any necessary repairs will be assessed at <?php echo $_POST['yourName']; ?>'s hourly rate with a one hour minimum charge.</p></li>
            <li><p>Web Hosting. If Client has no prior web host, Client gives <?php echo $_POST['yourName']; ?> rights to choose at their discretion. If Client has a prior host, Client gives <?php echo $_POST['yourName']; ?> rights to access all parts of hosting server with full administrator access.</p></li>
            <li><p>Search Engine Registration. <?php echo $_POST['yourName']; ?> will optimize Client's website with appropriate titles, keywords, descriptions, and text; and thereafter submit Client's website to each of the major Search Engines and directories. Client understands there is no guaranteed placement or rank on the Search Engines and that a new website may never even appear on Search Engines at all, absent advanced Search Engine optimization and site promotion efforts. <?php echo $_POST['yourName']; ?> does not control Search Engines' algorithms and huge shifts can appear daily, weekly, and even hourly.</p></li>
            <li>
              <p>Work Schedule and Completion Date. <?php echo $_POST['yourName']; ?> will submit a Mockup Draft of website no later than twenty (20) days after <?php echo $_POST['yourName']; ?> receives:</p>
              <ul>
                <li>This signed Contract</li>
                <li>The down payment on the fee (Appendix A)</li>
                <li>Initial direction from Client</li>
              </ul>
              <p>Client will provide <?php echo $_POST['yourName']; ?> with all the data needed to complete the website, including text (content), company logo, and photos. Upon completion of this stage, Client will be asked to confirm acceptance for the basic site design via email or by signing a printed copy of the design and faxing to <?php echo $_POST['yourName']; ?>. Once this acceptance is received from Client, the work necessary to complete the project will continue in this order:</p>
              <?php echo $_POST['workOrder']; ?>
              <p>Upon completion of the website, an email or letter and invoice will be sent to Client advising that the work has been completed. Client will supply written approval by printing, initialing and faxing back each page in website. After this Contract has been paid in full, the website will be uploaded to Client's hosting company. <?php echo $_POST['yourName']; ?> will burn one copy of Client's website onto a CD, at Client's request, upon completion of the site and upon receipt of final balance. Additional copies of the CD will be made available for $25.00 each.</p>
            </li>
          </ol>
        </li><!-- Completion of Project -->

        <li>
          <strong>MAINTENANCE AND WARRANTY</strong>
          <ol>
            <li><p>Maintenance Grace Period. This Contract includes minor web page maintenance to regular web pages (not store product pages) over a 60-day period, including updating links and making minor changes to a sentence or paragraph. It does not include removing 50% or more of the text from a page and replacing it with new text. If Client or an agent other than <?php echo $_POST['yourName']; ?> attempts updating Client's pages, time to repair web pages will be assessed at the hourly rate, and is not included as a part of the regular maintenance covered by the Maintenance Grace Period. This 60-day period commences upon the date the website is launched (Launch Stage in Section 3.9). Changes requested by Client beyond the expiration of the 60-day period will be billed at <?php echo $_POST['yourName']; ?>'s hourly rate. This rate shall also apply toward additional work authorized beyond the maximums specified in the Design Quote (Appendix A) for such services as: general Internet orientation education, marketing consulting, web page design, editing, art, photo, graphic services, and helping Clients learn how to use their own web page editor (when applicable). <?php echo $_POST['yourName']; ?> is not responsible for the functionality or maintenance of the website after the Project is completed and the 60-day warranty period has expired, unless a separate Maintenance Contract is executed.</p></li>
            <li><p>Extended Maintenance Contracts. Terms for the separate Maintenance Contract between <?php echo $_POST['yourName']; ?> and Client in connection with the Project are listed in Appendix B.</p></li>
          </ol>
        </li><!-- Maintenance and Warranty -->

        <li>
          <strong>INTELLECTUAL PROPERTY</strong>
          <ol>
            <li><p>Offers and Quotes. Offers and quotes made by <?php echo $_POST['yourName']; ?> to potential clients should be treated as trade secrets and remain the property of <?php echo $_POST['yourName']; ?>. Such offers and quotes or the information contained within them shall not be passed to third parties or publicly disseminated without prior written authorization from <?php echo $_POST['yourName']; ?>. This includes, but is not limited to, technical features, functionality, aspects of the design, and pricing information provided to Client by <?php echo $_POST['yourName']; ?>.</p></li>
            <li><p>Copyrights and Trademarks. Client will obtain all necessary permissions and authorities in connection with the use of all copy, graphic images, registered company logos, names and trademarks, or any other material it supplies to <?php echo $_POST['yourName']; ?> for the Project. The execution of this Contract between <?php echo $_POST['yourName']; ?> and Client shall be regarded as an unconditional guarantee by Client to <?php echo $_POST['yourName']; ?> that all such permissions and authorities have been obtained and that the inclusion of such material in the Project would not constitute a criminal offense or civil delict. By agreeing to these terms and conditions, Client removes the legal responsibility of <?php echo $_POST['yourName']; ?> and indemnifies it from any claims or legal actions in any manner related to the content of Client's website and/or the Project.</p></li>
            <li><p>Domain Name. Any domain name obtained will belong to Client. Client agrees to indemnify <?php echo $_POST['yourName']; ?>, including any incidental costs, against any claims that a domain name applied for, or obtained, violates the intellectual property rights of a third party. Client warrants that the domain name sought is not a trademark of a third party.</p></li>
            <li><p>Trade Secrets. Any code that is not freely accessible to third parties and not in the public domain, and to which <?php echo $_POST['yourName']; ?> or its suppliers owns the copyright, may not be copied, published, distributed, or passed to any third parties in any form without prior written consent from <?php echo $_POST['yourName']; ?>. Unless previously agreed otherwise in writing, no modifications may be made by Client or any third party to code to which <?php echo $_POST['yourName']; ?> or its suppliers owns the copyright. <?php echo $_POST['yourName']; ?> acknowledges Client's intellectual property rights. Information passed in written form to <?php echo $_POST['yourName']; ?> which Client has marked as "confidential" or "trade secret," will not be published or made available in any other way to third parties without Client's prior written consent.</p></li>
            <li><p>Ownership to Web Pages and Graphics. Copyright to the finished assembled work of web pages and graphics produced by <?php echo $_POST['yourName']; ?> is owned by <?php echo $_POST['yourName']; ?>. Upon final payment of this Contract, Client is assigned rights to use the design, photos, graphics, source code, mock-up files, text, contained in the finished Project. Rights to photos, graphics, computer programs are specifically not transferred to Client, and remain the property of their respective owners. <?php echo $_POST['yourName']; ?> and its subcontractors retain the right to display all designs as examples of their work in their respective portfolios.</p></li>
          </ol>
        </li><!-- Intellectual Propery -->

        <li>
          <strong>RIGHTS AND RESPONSIBILITIES</strong>
          <ol>
            <li><p>Assignment of Project. <?php echo $_POST['yourName']; ?> reserves the right to assign certain subcontractors to the Project to insure the right fit for the job as well as on-time completion. When subcontracting is required, <?php echo $_POST['yourName']; ?> will only use industry recognized professionals.</p></li>
            <li><p>Warranties and Liability. Client agrees that any material submitted for publication will not contain anything leading to an abusive or unethical use of the Web Hosting Service, the Host Server or <?php echo $_POST['yourName']; ?>. Abusive and unethical materials and uses include, but are not limited to, pornography, obscenity, nudity, violations of privacy, computer viruses, harassment, any illegal activity, spamming, advocacy of an illegal activity, and any infringement of privacy. Client hereby agrees to indemnify and hold harmless <?php echo $_POST['yourName']; ?> from any claim resulting from Client's publication of material or use of those materials. It is also understood that <?php echo $_POST['yourName']; ?> will not publish information over the Internet which may be used by another party to harm another.</p></li>
            <li><p>Events Beyond <?php echo $_POST['yourName']; ?>'s Control. <?php echo $_POST['yourName']; ?> does not warrant the functions of the website will meet Client's expectations of site traffic or resulting business or that the operation of the web pages will be uninterrupted and/or error-free. <?php echo $_POST['yourName']; ?> shall not be held responsible for occasional downtime of email or website due to line interruptions, software, hardware, or electrical failure, natural events such as fire, and/or other instances beyond <?php echo $_POST['yourName']; ?>'s control. <?php echo $_POST['yourName']; ?> does not host websites and will not be held responsible in the event of down-time.</p></li>
            <li><p>Indemnification. Client agrees that it shall defend, indemnify, save and hold <?php echo $_POST['yourName']; ?> harmless from any and all demands, liabilities, losses, costs and claims, including reasonable attorney's fees associated with <?php echo $_POST['yourName']; ?>'s development of Client's website. This includes Liabilities asserted against <?php echo $_POST['yourName']; ?>, its subcontractors, its agents, its clients, servants, officers, and employees, that may arise or result from any service provided or performed or agreed to be performed or any product sold by the Client, its agents, employees or assigns. Client also agrees to defend, indemnify, and hold harmless <?php echo $_POST['yourName']; ?> against Liabilities arising out of any injury to person or property caused by any products or services sold or otherwise distributed over Client's website. This includes infringing on the proprietary rights of a third party, copyright infringement, and delivering any defective product or misinformation which is detrimental to another person, organization, or business.</p></li>
            <li><p>Rights Upon Termination of Contract. <?php echo $_POST['yourName']; ?> shall transfer, assign, and make available to Client all property and materials in <?php echo $_POST['yourName']; ?>'s possession or subject to <?php echo $_POST['yourName']; ?>'s control that are the property of Client, subject to payment in full of amounts due pursuant to this Contract. <?php echo $_POST['yourName']; ?> also agrees to provide reasonable cooperation in arranging for the transfer or approval of third party's interest in all contracts, agreements, and other arrangements with advertising media, suppliers, talent, and others not then utilized, and all rights and claims thereto and therein, following appropriate release from the obligations therein.</p></li>
            <li><p>Termination. In the event Client terminates this Contract by registered letter within 30 days of execution thereof, fifty percent (50%) of the initial down payment will be refunded. Work completed shall be billed at the hourly rate stated in Appendix A, and deducted from 50% of the down payment, the balance of which shall be returned to Client. If, at the time of the request for refund, work has been completed beyond the amount covered by the initial down payment, Client shall be liable to pay for all work completed at the hourly rate. No portion of this initial payment will be refunded unless written application is made within 30 days of signing this Contract. Refund request must be submitted by registered letter to <?php echo $_POST['yourName']; ?>, <?php echo $_POST['yourAddress']; ?>, <?php echo $_POST['yourCity']; ?>, <?php echo $_POST['yourState']; ?>, <?php echo $_POST['yourZip']; ?>.</p></li>
            <li><p>Default. In the event of any default of any material obligation by or owned by a party pursuant to this Contract, then the other party may provide written notice of such default and if such default is not cured within ten (10) days of the written notice, then the non-defaulting party may terminate this Contract.</p></li>
            <li><p>Notices. Any notice required by this Contract or given in connection with it, shall be in writing and shall be given to the appropriate party by personal delivery or by certified mail, postage prepaid, or recognized overnight delivery service.</p></li>
            <li><p>Laws Affecting Electronic Commerce. From time to time, governments enact laws and levy taxes and tariffs affecting Internet electronic commerce. Client agrees that Client is solely responsible for complying with such laws, taxes, and tariffs, and will hold harmless, protect, and defend <?php echo $_POST['yourName']; ?> and its subcontractors from any claim, suit, penalty, tax, or tariff arising from Client's exercise of Internet electronic commerce.</p></li>
          </ol>
        </li><!-- Rights and Responsibilities -->

        <li>
          <strong>INTERPRETATION</strong>
          <ol>
            <li><p>Severability. If any provision of this Contract is found to be unlawful, void, or for any reason unenforceable, then that provision shall be deemed severable from this Contract and shall not affect the validity and enforceability of any remaining provisions.</p></li>
            <li><p>Litigation. Any dispute arising from this Contract will be litigated in <?php echo $_POST['yourCounty']; ?>, <?php echo $_POST['yourState']; ?>. This Contract shall be governed and construed in accordance with the laws of the State of <?php echo $_POST['yourState']; ?>, United States of America.</p></li>
            <li><p>Entire Agreement. The undersigned hereby agrees to the terms, conditions, and stipulations of this Contract on behalf of his or her organization or business. This Contract constitutes the entire understanding of both parties, and the sole agreement between <?php echo $_POST['yourName']; ?> and Client regarding this website. Any additional work not specified in this Contract, Appendix A or Appendix B must be authorized by a written change order. All prices specified will be honored for thirty (30) days after both parties sign this Contract. Continued services after that time will require a new agreement.</p></li>
          </ol>
        </li><!-- Interpretation -->
      </ol>

      <div class='break'></div>

      <p class='centerText'>This Contract constitutes the entire agreement between <?php echo $_POST['yourName']; ?> and Client, and any changes or modification thereto must be in writing and signed by both parties. This Contract terminates and supersedes all prior understanding or agreements between <?php echo $_POST['yourName']; ?> and Client.</p>

      <table class='signatures'>
        <tr><td><?php echo $_POST['yourName']; ?></td><td><?php echo $_POST['clientName']; ?></td></tr>
        <tr><td><?php echo $_POST['yourName']; ?>'s Signature</td><td><?php echo $_POST['clientName']; ?>'s Signature</td></tr>
        <tr><td>Date</td><td>Date</td></tr>
      </table>
    <?php } ?>
  </body>
</html>