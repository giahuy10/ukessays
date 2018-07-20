@extends('layouts.home')

@section('content')

<div class="main-slide">
		<div class="center-wrapper flex-wrapper">
		   <div class="main-slide__slogan">
			  <h1>
				 <span>
				 Best writers.
				 </span>
				 Best papers.
			  </h1>
			  <h2>
				 Let professionals take care of your academic papers
			  </h2>
		   </div>
		   <div class="main-slide__calculator">
			  <script type="text/javascript">currency = 'USD';</script>
			  <style>
				 /*STYLE for SPLIT!    */
				 .split-class{
				 display: none;
				 }
			  </style>
			  <div id="calculator" class="underHeadergrad clearfix">
				 <!-- <div class="right-side-form"> -->
				 <div class="calculator calcBody">
					<div class="title-calc">Check prices</div>
					<div class="wrap-line-anim">
					   <div class="line-animate-width">
					   </div>
					</div>
					<form class="form_order_top" action="/order/" method="get">
					   <div class="selectWrap">
						  <div class="selectArrow">
							 <select id="set-doctype" name="doctype_id" class="t_papers">
								<option value="0" selected="selected">
								   Essay                                
								</option>
								<option value="13">
								   Term Paper                                
								</option>
								<option value="14">
								   Research Paper                                
								</option>
								<option value="39">
								   Coursework                                
								</option>
								<option value="37">
								   Book Report                                
								</option>
								<option value="38">
								   Book Review                                
								</option>
								<option value="85">
								   Movie Review                                
								</option>
								<option value="242">
								   Research Summary                                
								</option>
								<option value="1">
								   Dissertation                                
								</option>
								<option value="15">
								   Thesis                                
								</option>
								<option value="172">
								   Thesis/Dissertation Proposal                                
								</option>
								<option value="40">
								   Research Proposal                                
								</option>
								<option value="146">
								   Dissertation Chapter - Abstract                                
								</option>
								<option value="147">
								   Dissertation Chapter - Introduction Chapter                                
								</option>
								<option value="148">
								   Dissertation Chapter - Literature Review                                
								</option>
								<option value="149">
								   Dissertation Chapter - Methodology                                
								</option>
								<option value="150">
								   Dissertation Chapter - Results                                
								</option>
								<option value="151">
								   Dissertation Chapter - Discussion                                
								</option>
								<option value="159">
								   Dissertation Services - Editing                                
								</option>
								<option value="174">
								   Dissertation Services - Proofreading                                
								</option>
								<option value="152">
								   Formatting                                
								</option>
								<option value="142">
								   Admission Services - Admission Essay                                
								</option>
								<option value="143">
								   Admission Services - Scholarship Essay                                
								</option>
								<option value="144">
								   Admission Services - Personal Statement                                
								</option>
								<option value="145">
								   Admission Services - Editing                                
								</option>
								<option value="3">
								   Editing                                
								</option>
								<option value="163">
								   Proofreading                                
								</option>
								<option value="80">
								   Case Study                                
								</option>
								<option value="83">
								   Lab Report                                
								</option>
								<option value="84">
								   Speech/Presentation                                
								</option>
								<option value="234">
								   Math/Physics/Economics/Statistics Problems                                
								</option>
								<option value="168">
								   Article                                
								</option>
								<option value="169">
								   Article Critique                                
								</option>
								<option value="170">
								   Annotated Bibliography                                
								</option>
								<option value="171">
								   Reaction Paper                                
								</option>
								<option value="125">
								   Multiple Choice Questions (Non-time-framed)                                
								</option>
								<option value="126">
								   Multiple Choice Questions (Time-framed)                                
								</option>
								<option value="173">
								   Statistics Project                                
								</option>
								<option value="51">
								   PowerPoint Presentation                                
								</option>
								<option value="182">
								   Programming                                
								</option>
								<option value="260">
								   Mind/Concept mapping                                
								</option>
								<option value="261">
								   Multimedia Project                                
								</option>
								<option value="262">
								   Online assignment                                
								</option>
								<option value="263">
								   Simulation report                                
								</option>
								<option value="268">
								   Assessment                                
								</option>
								<option value="269">
								   Biography                                
								</option>
								<option value="270">
								   Business Plan                                
								</option>
								<option value="271">
								   Capstone Project                                
								</option>
								<option value="272">
								   Marketing Plan                                
								</option>
								<option value="273">
								   Critical Thinking                                
								</option>
								<option value="274">
								   Short Story                                
								</option>
								<option value="275">
								   SWOT Analysis                                
								</option>
								<option value="276">
								   Assignment                                
								</option>
								<option value="277">
								   Financial Analysis                                
								</option>
							 </select>
						  </div>
						  <div class="hintText">Type of Paper</div>
						  <div class="hintText split-class">Type of Paper</div>
					   </div>
					   <div id="price-area">
						  <div class="selectWrap pages_count">
							 <div class="selectArrow">
								<select name="numpages" class="numpages pager" id="pages_count" onchange="doUpdatePrices();return false">
								   <option value="1" selected="selected">
									  1  
									  page(s) / 275 words
								   </option>
								   <option value="2">
									  2  
									  page(s) / 550 words
								   </option>
								   <option value="3">
									  3  
									  page(s) / 825 words
								   </option>
								   <option value="4">
									  4  
									  page(s) / 1100 words
								   </option>
								   <option value="5">
									  5  
									  page(s) / 1375 words
								   </option>
								   <option value="6">
									  6  
									  page(s) / 1650 words
								   </option>
								   <option value="7">
									  7  
									  page(s) / 1925 words
								   </option>
								   <option value="8">
									  8  
									  page(s) / 2200 words
								   </option>
								   <option value="9">
									  9  
									  page(s) / 2475 words
								   </option>
								   <option value="10">
									  10  
									  page(s) / 2750 words
								   </option>
								   <option value="11">
									  11  
									  page(s) / 3025 words
								   </option>
								   <option value="12">
									  12  
									  page(s) / 3300 words
								   </option>
								   <option value="13">
									  13  
									  page(s) / 3575 words
								   </option>
								   <option value="14">
									  14  
									  page(s) / 3850 words
								   </option>
								   <option value="15">
									  15  
									  page(s) / 4125 words
								   </option>
								   <option value="16">
									  16  
									  page(s) / 4400 words
								   </option>
								   <option value="17">
									  17  
									  page(s) / 4675 words
								   </option>
								   <option value="18">
									  18  
									  page(s) / 4950 words
								   </option>
								   <option value="19">
									  19  
									  page(s) / 5225 words
								   </option>
								   <option value="20">
									  20  
									  page(s) / 5500 words
								   </option>
								   <option value="21">
									  21  
									  page(s) / 5775 words
								   </option>
								   <option value="22">
									  22  
									  page(s) / 6050 words
								   </option>
								   <option value="23">
									  23  
									  page(s) / 6325 words
								   </option>
								   <option value="24">
									  24  
									  page(s) / 6600 words
								   </option>
								   <option value="25">
									  25  
									  page(s) / 6875 words
								   </option>
								   <option value="26">
									  26  
									  page(s) / 7150 words
								   </option>
								   <option value="27">
									  27  
									  page(s) / 7425 words
								   </option>
								   <option value="28">
									  28  
									  page(s) / 7700 words
								   </option>
								   <option value="29">
									  29  
									  page(s) / 7975 words
								   </option>
								   <option value="30">
									  30  
									  page(s) / 8250 words
								   </option>
								   <option value="31">
									  31  
									  page(s) / 8525 words
								   </option>
								   <option value="32">
									  32  
									  page(s) / 8800 words
								   </option>
								   <option value="33">
									  33  
									  page(s) / 9075 words
								   </option>
								   <option value="34">
									  34  
									  page(s) / 9350 words
								   </option>
								   <option value="35">
									  35  
									  page(s) / 9625 words
								   </option>
								   <option value="36">
									  36  
									  page(s) / 9900 words
								   </option>
								   <option value="37">
									  37  
									  page(s) / 10175 words
								   </option>
								   <option value="38">
									  38  
									  page(s) / 10450 words
								   </option>
								   <option value="39">
									  39  
									  page(s) / 10725 words
								   </option>
								   <option value="40">
									  40  
									  page(s) / 11000 words
								   </option>
								   <option value="41">
									  41  
									  page(s) / 11275 words
								   </option>
								   <option value="42">
									  42  
									  page(s) / 11550 words
								   </option>
								   <option value="43">
									  43  
									  page(s) / 11825 words
								   </option>
								   <option value="44">
									  44  
									  page(s) / 12100 words
								   </option>
								   <option value="45">
									  45  
									  page(s) / 12375 words
								   </option>
								   <option value="46">
									  46  
									  page(s) / 12650 words
								   </option>
								   <option value="47">
									  47  
									  page(s) / 12925 words
								   </option>
								   <option value="48">
									  48  
									  page(s) / 13200 words
								   </option>
								   <option value="49">
									  49  
									  page(s) / 13475 words
								   </option>
								   <option value="50">
									  50  
									  page(s) / 13750 words
								   </option>
								   <option value="51">
									  51  
									  page(s) / 14025 words
								   </option>
								   <option value="52">
									  52  
									  page(s) / 14300 words
								   </option>
								   <option value="53">
									  53  
									  page(s) / 14575 words
								   </option>
								   <option value="54">
									  54  
									  page(s) / 14850 words
								   </option>
								   <option value="55">
									  55  
									  page(s) / 15125 words
								   </option>
								   <option value="56">
									  56  
									  page(s) / 15400 words
								   </option>
								   <option value="57">
									  57  
									  page(s) / 15675 words
								   </option>
								   <option value="58">
									  58  
									  page(s) / 15950 words
								   </option>
								   <option value="59">
									  59  
									  page(s) / 16225 words
								   </option>
								   <option value="60">
									  60  
									  page(s) / 16500 words
								   </option>
								   <option value="61">
									  61  
									  page(s) / 16775 words
								   </option>
								   <option value="62">
									  62  
									  page(s) / 17050 words
								   </option>
								   <option value="63">
									  63  
									  page(s) / 17325 words
								   </option>
								   <option value="64">
									  64  
									  page(s) / 17600 words
								   </option>
								   <option value="65">
									  65  
									  page(s) / 17875 words
								   </option>
								   <option value="66">
									  66  
									  page(s) / 18150 words
								   </option>
								   <option value="67">
									  67  
									  page(s) / 18425 words
								   </option>
								   <option value="68">
									  68  
									  page(s) / 18700 words
								   </option>
								   <option value="69">
									  69  
									  page(s) / 18975 words
								   </option>
								   <option value="70">
									  70  
									  page(s) / 19250 words
								   </option>
								   <option value="71">
									  71  
									  page(s) / 19525 words
								   </option>
								   <option value="72">
									  72  
									  page(s) / 19800 words
								   </option>
								   <option value="73">
									  73  
									  page(s) / 20075 words
								   </option>
								   <option value="74">
									  74  
									  page(s) / 20350 words
								   </option>
								   <option value="75">
									  75  
									  page(s) / 20625 words
								   </option>
								   <option value="76">
									  76  
									  page(s) / 20900 words
								   </option>
								   <option value="77">
									  77  
									  page(s) / 21175 words
								   </option>
								   <option value="78">
									  78  
									  page(s) / 21450 words
								   </option>
								   <option value="79">
									  79  
									  page(s) / 21725 words
								   </option>
								   <option value="80">
									  80  
									  page(s) / 22000 words
								   </option>
								   <option value="81">
									  81  
									  page(s) / 22275 words
								   </option>
								   <option value="82">
									  82  
									  page(s) / 22550 words
								   </option>
								   <option value="83">
									  83  
									  page(s) / 22825 words
								   </option>
								   <option value="84">
									  84  
									  page(s) / 23100 words
								   </option>
								   <option value="85">
									  85  
									  page(s) / 23375 words
								   </option>
								   <option value="86">
									  86  
									  page(s) / 23650 words
								   </option>
								   <option value="87">
									  87  
									  page(s) / 23925 words
								   </option>
								   <option value="88">
									  88  
									  page(s) / 24200 words
								   </option>
								   <option value="89">
									  89  
									  page(s) / 24475 words
								   </option>
								   <option value="90">
									  90  
									  page(s) / 24750 words
								   </option>
								   <option value="91">
									  91  
									  page(s) / 25025 words
								   </option>
								   <option value="92">
									  92  
									  page(s) / 25300 words
								   </option>
								   <option value="93">
									  93  
									  page(s) / 25575 words
								   </option>
								   <option value="94">
									  94  
									  page(s) / 25850 words
								   </option>
								   <option value="95">
									  95  
									  page(s) / 26125 words
								   </option>
								   <option value="96">
									  96  
									  page(s) / 26400 words
								   </option>
								   <option value="97">
									  97  
									  page(s) / 26675 words
								   </option>
								   <option value="98">
									  98  
									  page(s) / 26950 words
								   </option>
								   <option value="99">
									  99  
									  page(s) / 27225 words
								   </option>
								   <option value="100">
									  100  
									  page(s) / 27500 words
								   </option>
								   <option value="101">
									  101  
									  page(s) / 27775 words
								   </option>
								   <option value="102">
									  102  
									  page(s) / 28050 words
								   </option>
								   <option value="103">
									  103  
									  page(s) / 28325 words
								   </option>
								   <option value="104">
									  104  
									  page(s) / 28600 words
								   </option>
								   <option value="105">
									  105  
									  page(s) / 28875 words
								   </option>
								   <option value="106">
									  106  
									  page(s) / 29150 words
								   </option>
								   <option value="107">
									  107  
									  page(s) / 29425 words
								   </option>
								   <option value="108">
									  108  
									  page(s) / 29700 words
								   </option>
								   <option value="109">
									  109  
									  page(s) / 29975 words
								   </option>
								   <option value="110">
									  110  
									  page(s) / 30250 words
								   </option>
								   <option value="111">
									  111  
									  page(s) / 30525 words
								   </option>
								   <option value="112">
									  112  
									  page(s) / 30800 words
								   </option>
								   <option value="113">
									  113  
									  page(s) / 31075 words
								   </option>
								   <option value="114">
									  114  
									  page(s) / 31350 words
								   </option>
								   <option value="115">
									  115  
									  page(s) / 31625 words
								   </option>
								   <option value="116">
									  116  
									  page(s) / 31900 words
								   </option>
								   <option value="117">
									  117  
									  page(s) / 32175 words
								   </option>
								   <option value="118">
									  118  
									  page(s) / 32450 words
								   </option>
								   <option value="119">
									  119  
									  page(s) / 32725 words
								   </option>
								   <option value="120">
									  120  
									  page(s) / 33000 words
								   </option>
								   <option value="121">
									  121  
									  page(s) / 33275 words
								   </option>
								   <option value="122">
									  122  
									  page(s) / 33550 words
								   </option>
								   <option value="123">
									  123  
									  page(s) / 33825 words
								   </option>
								   <option value="124">
									  124  
									  page(s) / 34100 words
								   </option>
								   <option value="125">
									  125  
									  page(s) / 34375 words
								   </option>
								   <option value="126">
									  126  
									  page(s) / 34650 words
								   </option>
								   <option value="127">
									  127  
									  page(s) / 34925 words
								   </option>
								   <option value="128">
									  128  
									  page(s) / 35200 words
								   </option>
								   <option value="129">
									  129  
									  page(s) / 35475 words
								   </option>
								   <option value="130">
									  130  
									  page(s) / 35750 words
								   </option>
								   <option value="131">
									  131  
									  page(s) / 36025 words
								   </option>
								   <option value="132">
									  132  
									  page(s) / 36300 words
								   </option>
								   <option value="133">
									  133  
									  page(s) / 36575 words
								   </option>
								   <option value="134">
									  134  
									  page(s) / 36850 words
								   </option>
								   <option value="135">
									  135  
									  page(s) / 37125 words
								   </option>
								   <option value="136">
									  136  
									  page(s) / 37400 words
								   </option>
								   <option value="137">
									  137  
									  page(s) / 37675 words
								   </option>
								   <option value="138">
									  138  
									  page(s) / 37950 words
								   </option>
								   <option value="139">
									  139  
									  page(s) / 38225 words
								   </option>
								   <option value="140">
									  140  
									  page(s) / 38500 words
								   </option>
								   <option value="141">
									  141  
									  page(s) / 38775 words
								   </option>
								   <option value="142">
									  142  
									  page(s) / 39050 words
								   </option>
								   <option value="143">
									  143  
									  page(s) / 39325 words
								   </option>
								   <option value="144">
									  144  
									  page(s) / 39600 words
								   </option>
								   <option value="145">
									  145  
									  page(s) / 39875 words
								   </option>
								   <option value="146">
									  146  
									  page(s) / 40150 words
								   </option>
								   <option value="147">
									  147  
									  page(s) / 40425 words
								   </option>
								   <option value="148">
									  148  
									  page(s) / 40700 words
								   </option>
								   <option value="149">
									  149  
									  page(s) / 40975 words
								   </option>
								   <option value="150">
									  150  
									  page(s) / 41250 words
								   </option>
								   <option value="151">
									  151  
									  page(s) / 41525 words
								   </option>
								   <option value="152">
									  152  
									  page(s) / 41800 words
								   </option>
								   <option value="153">
									  153  
									  page(s) / 42075 words
								   </option>
								   <option value="154">
									  154  
									  page(s) / 42350 words
								   </option>
								   <option value="155">
									  155  
									  page(s) / 42625 words
								   </option>
								   <option value="156">
									  156  
									  page(s) / 42900 words
								   </option>
								   <option value="157">
									  157  
									  page(s) / 43175 words
								   </option>
								   <option value="158">
									  158  
									  page(s) / 43450 words
								   </option>
								   <option value="159">
									  159  
									  page(s) / 43725 words
								   </option>
								   <option value="160">
									  160  
									  page(s) / 44000 words
								   </option>
								   <option value="161">
									  161  
									  page(s) / 44275 words
								   </option>
								   <option value="162">
									  162  
									  page(s) / 44550 words
								   </option>
								   <option value="163">
									  163  
									  page(s) / 44825 words
								   </option>
								   <option value="164">
									  164  
									  page(s) / 45100 words
								   </option>
								   <option value="165">
									  165  
									  page(s) / 45375 words
								   </option>
								   <option value="166">
									  166  
									  page(s) / 45650 words
								   </option>
								   <option value="167">
									  167  
									  page(s) / 45925 words
								   </option>
								   <option value="168">
									  168  
									  page(s) / 46200 words
								   </option>
								   <option value="169">
									  169  
									  page(s) / 46475 words
								   </option>
								   <option value="170">
									  170  
									  page(s) / 46750 words
								   </option>
								   <option value="171">
									  171  
									  page(s) / 47025 words
								   </option>
								   <option value="172">
									  172  
									  page(s) / 47300 words
								   </option>
								   <option value="173">
									  173  
									  page(s) / 47575 words
								   </option>
								   <option value="174">
									  174  
									  page(s) / 47850 words
								   </option>
								   <option value="175">
									  175  
									  page(s) / 48125 words
								   </option>
								   <option value="176">
									  176  
									  page(s) / 48400 words
								   </option>
								   <option value="177">
									  177  
									  page(s) / 48675 words
								   </option>
								   <option value="178">
									  178  
									  page(s) / 48950 words
								   </option>
								   <option value="179">
									  179  
									  page(s) / 49225 words
								   </option>
								   <option value="180">
									  180  
									  page(s) / 49500 words
								   </option>
								   <option value="181">
									  181  
									  page(s) / 49775 words
								   </option>
								   <option value="182">
									  182  
									  page(s) / 50050 words
								   </option>
								   <option value="183">
									  183  
									  page(s) / 50325 words
								   </option>
								   <option value="184">
									  184  
									  page(s) / 50600 words
								   </option>
								   <option value="185">
									  185  
									  page(s) / 50875 words
								   </option>
								   <option value="186">
									  186  
									  page(s) / 51150 words
								   </option>
								   <option value="187">
									  187  
									  page(s) / 51425 words
								   </option>
								   <option value="188">
									  188  
									  page(s) / 51700 words
								   </option>
								   <option value="189">
									  189  
									  page(s) / 51975 words
								   </option>
								   <option value="190">
									  190  
									  page(s) / 52250 words
								   </option>
								   <option value="191">
									  191  
									  page(s) / 52525 words
								   </option>
								   <option value="192">
									  192  
									  page(s) / 52800 words
								   </option>
								   <option value="193">
									  193  
									  page(s) / 53075 words
								   </option>
								   <option value="194">
									  194  
									  page(s) / 53350 words
								   </option>
								   <option value="195">
									  195  
									  page(s) / 53625 words
								   </option>
								   <option value="196">
									  196  
									  page(s) / 53900 words
								   </option>
								   <option value="197">
									  197  
									  page(s) / 54175 words
								   </option>
								   <option value="198">
									  198  
									  page(s) / 54450 words
								   </option>
								   <option value="199">
									  199  
									  page(s) / 54725 words
								   </option>
								   <option value="200">
									  200  
									  page(s) / 55000 words
								   </option>
								</select>
							 </div>
							 <div class="hintText">number of <span class="numberOf"> Pages </span></div>
							 <div class="hintText split-class"><span class="numberOf"> Pages </span></div>
						  </div>
						  <div class="selectWrap set-urgency">
							 <div class="selectArrow">
								<select id="set-urgency" name="urgency" class="proxy" onchange="doUpdatePrices(); readLimitSelect(); return false;">
								   <option value="11">10 days</option>
								   <option value="1">7 days</option>
								   <option value="3">5 days</option>
								   <option value="4">4 days</option>
								   <option value="5">3 days</option>
								   <option value="6">48 hours</option>
								   <option value="7">24 hours</option>
								   <option value="8">12 hours</option>
								   <option value="9">6 hours</option>
								   <option value="10">3 hours</option>
								</select>
							 </div>
							 <div class="hintText">urgency</div>
							 <div class="hintText split-class">Urgency</div>
						  </div>
						  <div class="selectWrap" style="display: none;">
							 <div class="selectArrow">
								<select class="bg" name="wrlevel_id" id="set-wrlevel" onchange="doUpdatePrices();return false">
								   <option value="1">Standard Quality</option>
								   <option value="2">Premium Quality</option>
								   <option value="27">Platinum Quality</option>
								</select>
							 </div>
							 <div class="hintText">urgency</div>
							 <div class="hintText split-class">Urgency</div>
						  </div>
						  <div class="firstOrder">
							 <input type="checkbox" id="promo" name="cc" onchange="doUpdatePrices();return false" checked="">
							 <label for="promo">
							 <span class="fa"></span>
							 <label class="new-cust">I’m a new customer</label>
							 <span class="orange-off">(15 % OFF)</span>
							 </label>
						  </div>
						  <div class="Procced  bottomPreOrder clearfix">
							 <div class="pull-left ProccedItem">
								<div class="split-class">Total:  </div>
								<div id="total_price"><a href="/order/?doctype=0&amp;urgency=11&amp;wrlevel=1&amp;order_category=0&amp;curr=USD&amp;numpages=1&amp;numpapers=1">$21.99</a></div>
								<div id="discount_text" style="display: inline-block;"></div>
								<div class="split-class" id="discount-block-oftotal" style="display: none;">You save <span>15%</span></div>
							 </div>
							 <div class="pull-right ProccedItem">
								<a href="/order/?doctype=0&amp;urgency=11&amp;wrlevel=1&amp;order_category=0&amp;curr=USD&amp;numpages=1&amp;numpapers=1&amp;promo=begin15" id="prices_order_button" class="button"><span>Proceed</span> <span class="split-class">Continue</span> <i></i></a>
							 </div>
						  </div>
						  <!-- <div class="discText">
							 <span>* Membership discounts are not applied to orders under $30.00</span>
							 </div> -->
						  <script type="text/javascript">
							 var uids = [3,4,5,6,1,7,8,9,10,11];
							 var wlids = [1,2,27];
							 var plist = {"3":{"1":24.99,"2":26.99,"27":29.99},"4":{"1":25.99,"2":27.99,"27":31.99},"5":{"1":27.99,"2":29.99,"27":34.99},"6":{"1":35.99,"2":37.99,"27":40.99},"1":{"1":22.99,"2":24.99,"27":27.99},"7":{"1":41.99,"2":43.99,"27":48.99},"8":{"1":45.99,"2":47.99,"27":52.99},"9":{"1":49.99,"2":51.99,"27":56.99},"10":{"1":53.99,"2":55.99,"27":60.99},"11":{"1":21.99,"2":23.99,"27":26.99}};
							 var dt = 0;
						  </script>
						  <script>
							 var limitList = new Array();
							 limitList[0] = {"1":{"5":"40","6":"19","7":"12","8":"8","9":"4","10":"3","1":"200"},"2":{"5":"40","6":"19","7":"12","8":"8","9":"4","10":"3","1":"200"},"27":{"5":"40","6":"19","7":"12","8":"8","9":"4","10":"3","1":"200"}};
						  </script>
						  <script>
							 function readLimitSelect() {
								 var pageCount = $("#pages_count");
								 var optionName = '';
								 var limit = parseInt(limitList[dt][wrlevel][urgency]);
								 var words = 275;
								 if (numpages > limit || isNaN(limit)) {
									 (isNaN(limit)) ? (limit = 200) : limit;
									 pageCount.empty();
									 for (var i = 1; i <= limit; i++) {
										 var option = '<option value=' + i + '>' + i + ' page(s) / ' + words * i + ' words </option>';
										 pageCount.append(option);
									 }
									 if(numpages > limit){
										 pageCount.val(limit);
									 }else{
										 pageCount.val(numpages)
									 }
									 doUpdatePrices();
								 } else {
									 pageCount.empty();
									 for (var i = 1; i <= limit; i++) {
										 var option = '<option value=' + i + '>' + i + ' page(s) / ' + words * i + ' words </option>';
										 pageCount.append(option);
									 }
									 pageCount.val(numpages);
								 }
							 }
							 
							 function isNontechDoctype() {
							   var isNonTech = false,
								   noTech = Object.keys(nonTechDoctypes);
							   isNonTech = noTech.some(function (item) {
								 var nonTechDt = parseInt(item);
								 return nonTechDt === dt;
							   });
							   return isNonTech;
							 }
							 
							 function isDiscountable() {
							   return !isNontechDoctype();
							 }
							 
							 function isMatchDiscountRules() {
							   var price = plist[urgency][wrlevel]
							   var discountElChecked = $('#promo').attr('checked'),
								   initialTotal = price * numpages * numpapers;
							   if ( discountElChecked && (initialTotal >= 30) && (numpages >= 1) ) {
								 return true;
							   } else {
								 return false;
							   }
							 }
							 
							 function getMultiChoiceGroup() {
							   var groups = price_groups_MultiChoiceQuestTime[dt],
								 groupId = null;
							   for (let group in groups) {
								 if (numpages >= parseInt(groups[group].from)) {
								   groupId = group;
								 }
							   }
							   return groupId;
							 }
							 
							 function costPerPageMulti(questionGroup) {
							   return Math.round(100 * price_MultiChoiceQuestTime[dt][wrlevel][urgency][questionGroup]) / 100;
							 }
							 
							 function calculateDiscount() {
							   var totalPrice = $('#total_price a')
							   var btnProceed = $('#prices_order_button')
							   var promo =  '&promo=begin15'
							   var priceWithDiscountTotal = 0
							   var converted_discount = (100 - 15) / 100;
							   if (isDiscountable() && (($('#promo').is(':checked') && $('#promo').length ))) {
								 if ( isMatchDiscountRules() ) {
								   priceWithDiscountTotal = (Math.round(converted_price * numpages * numpapers * converted_discount * 100) / 100).toFixed(2);
								   totalPrice.html(currency_signes[currency] + priceWithDiscountTotal);
								   btnProceed.attr('href',href+promo);
								 } else {
								   totalPrice.html(currency_signes[currency] + price_item );
								   btnProceed.attr('href',href+promo);
								 }
							   }
							 }
							 
							 $("#papers_count, #promo, #pages_count, #set-urgency").bind('change', function () {
							   calculateDiscount();
							 });
							 // $("#papers_count, #promo, #pages_count, #set-urgency").bind('change', function () {
							 //     readLimitSelect()
							 // });
							 
						  </script>
					   </div>
					</form>
				 </div>
				 <!--  </div> -->
			  </div>
			  <script type="text/javascript">
				 var pageDoctype = $('#set-doctype option[selected]').val();
				 $('#set-doctype').val(pageDoctype);
				 $('#pages_count').val(1);
				 $('#set-urgency').val(11);
				 
				 $(document).ready(function(){
				 
					 doUpdatePrices();
					 calculateDiscount();
					 $('#set-doctype').change( function(){
						 $item_id = $(this).attr('id');
						 $price_area = $('#price-area');
				 
						 $.ajax({
							 url: "/index.reloadpricecalc/",
							 type:'POST',
							 dataType: "text",
							 data: "ajaxPos=8&ajaxOrder=0&doctype=" + $('#set-doctype').val() +"&currency="+currency,
							 beforeSend: function(){
								 $price_area.html('<div class="load-anime"/></div>');
							 },
							 error: function (jqXHR, exception) {
								 var msg = '';
								 if (jqXHR.status === 0) {
									 msg = 'Not connect.\n Verify Network.';
								 } else if (jqXHR.status == 404) {
									 msg = 'Requested page not found. [404]';
								 } else if (jqXHR.status == 500) {
									 msg = 'Internal Server Error [500].';
								 } else if (exception === 'parsererror') {
									 msg = 'Requested JSON parse failed.';
								 } else if (exception === 'timeout') {
									 msg = 'Time out error.';
								 } else if (exception === 'abort') {
									 msg = 'Ajax request aborted.';
								 } else {
									 msg = 'Uncaught Error.\n' + jqXHR.responseText;
								 }
								 console.log(msg);
							 },
							 success: function( data ){
								 $price_area.html( data );
								 doUpdatePrices();
								 calculateDiscount();
								 $('.numpages')
										 .bind('selectric-before-open', function() {
											 $(".importantOrder, .button_conteiner").addClass("invisible");
										 }).bind('selectric-before-close', function() {
											 $(".importantOrder, .button_conteiner").removeClass("invisible");
										 });
										 setNumberOfText();
										
							 }
						 });
					 });
				 });
				 function fieldsCheck()
				 {
					 fields = ["pages_count","papers_count"];
					 for(i = 0; i < fields.length; i++)
					 {
						 if($("#"+fields[i]).length && !filterInt($("#"+fields[i])))
						 {
							 return false;
						 }
					 }
					 return true;
				 }
				 function doUpdatePrices() {
					 if(!fieldsCheck())
					 {
						 return false;
					 }
					 is_adm = false;
					 discountPg = 1;
					 discountPp = 1;
					 numpagesStr = numpapersStr = '';
					 numpapers = 1;
					 spacing = 1;
					 urgency = 0;
					 wrlevel = 0;
					 //numpages = parseInt( $('#pages_count').attr( 'value' ) );
					 numpages = parseInt( $('#pages_count').val() );
					 urgency = parseInt( $('#set-urgency').val() );
					 wrlevel = parseInt( $('#set-wrlevel').val() ) || 1;
					 doctype = parseInt( $("#set-doctype").val() );
					 if ($('#pages_count').length && $('#pages_count').hasClass('pager'))
					 {
						 doctypes400 = new Array();
						 doctypes400[222] = 1;
						 doctypes400[125] = 1;
						 doctypes400[126] = 1;
						 doctypes50 = new Array();
						 doctypes50[51] = 1;
						 doctypes50[182] = 1;
						 if(doctypes400[doctype] )
						 {
							 if(numpages > 400)
							 {
								 numpages = 400;
							 }
						 }else
						 if(doctypes50[doctype])
						 {
							 if(numpages > 50)
							 {
								 numpages = 50;
							 }
						 }else if( numpages > 200)
						 {
							 numpages = 200;
						 }
						 if (isNaN(numpages) || numpages < 1)
						 {
							 numpages = 1;
						 }
						 $('#pages_count').val(numpages);
					 }
					 if ( $('#papers_count').attr( 'id' ) )
					 {
						 numpapers = parseInt( $('#papers_count').attr( 'value' ) );
					 }
					 for ( di=0; di < adm_dt.length; di++ ) {
						 if ( adm_dt[di] == dt ) {
							 is_adm = true;
							 break;
						 }
					 }
					 if ( numpages >= 1) {
						 numpagesStr = '&numpages=' + numpages;
							 for (from in cppDiscountRules) {
								 if ( numpages >= parseInt( from ) ) {
									 discountPg = ( 100 - cppDiscountRules[from] ) / 100;
									 if ($('#pages_count').length && $('#pages_count').hasClass('pager'))
									 {
										 text =  '<span class="discount_btn">You save ' + cppDiscountRules[from] + '%</span>';
									 }
									 else
									 {
										 text =  'Discount: ' + cppDiscountRules[from] + '%' ;
									 }
									 $( "#discount_text" ).html(text);
								 }
							 }
					 } else {
						 $( "#discount_text" ).html( '' );
					 }
					 if ( numpapers >= 1 ) {
						 numpapersStr = '&numpapers=' + numpapers;
						 if ( is_adm == true ) {
							 for (from in cppDiscountRulesAdmmiss ) {
								 if ( numpapers >= parseInt( from ) ) {
									 discountPp = ( 100 - cppDiscountRulesAdmmiss[from] ) / 100;
									 $( "#discount_text_papers" ).html( 'Discount: ' + cppDiscountRulesAdmmiss[from] + '%' );
								 }
							 }
						 }
					 } else if ( is_adm == true ) {
						 $( "#discount_text_papers" ).html( 'Get a discount!' );
					 }
					 category_id = 0;
					 if($("#set-category").length && $("#set-category").val() > 0)
					 {
						 category_id = $("#set-category").val();
					 }
					 // Get price
					 if (plist && plist[urgency] && plist[urgency][wrlevel])
					 {
						 $price_item_value = $("#total_price");
						 if(filterPagesNumber(numpages, dt, urgency, wrlevel))
						 {
							 price = plist[urgency][wrlevel];
							 converted_price = Math.round((price * currencyRates[currency] * 100)) / 100;
							 if (!(dt in nonTechDoctypes) && (category_id in techCategories))
							 {
								 price += 10 / currencyRates[currency];
							 }
							 price_item = ( Math.round(spacing * price * numpages * 100 * discountPp * numpapers * discountPg * currencyRates[currency] ) / 100 ).toFixed( 2 );
							 var multiChoiceGroup = getMultiChoiceGroup();
							 if (multiChoiceGroup) {
								 var multi_per_page = costPerPageMulti(multiChoiceGroup);
								 converted_price = Math.round((multi_per_page * currencyRates[currency] * 100)) / 100;
								 price_item = (Math.round(((converted_price * numpages)) * 100) / 100).toFixed(2);
							 } else {
								 converted_price = Math.round((price * currencyRates[currency] * 100)) / 100;
								 price_item = ( Math.round(spacing * converted_price * numpages * 100 * discountPp * numpapers * discountPg) / 100 ).toFixed(2);
							 }
							 href = '/order/?doctype='+dt+'&urgency='+urgency+'&wrlevel='+wrlevel+'&order_category='+category_id+'&curr='+currency + numpagesStr + numpapersStr;
							 $price_item_value.html( '<a href="'+ href +'">'+ currency_signes[currency] + price_item +'</a>' );
							 $('#prices_order_button').attr('href', href);
						 }
						 else
						 {
							 $price_item_value.html( price_item );
						 }
					 }
				 }
				 function filterPagesNumber(numpages, dt, urg, wrl)
				 {
					 if( numpages && limitList[dt] && limitList[dt][wrl] && limitList[dt][wrl][urg] && limitList[dt][wrl][urg] < numpages)
					 {
						 return false;
					 }
					 return true;
				 }
				 function filterInt(item) {
					 if (item.val() != parseInt(item.val()) && item.val() < 1)
					 {
						 return false;
					 }
					 return true;
				 }
				 function changeCurrency( curr_item ) {
					 currency = curr_item;
					 doUpdatePrices();
				 }
				 function setNumberOfText(){
					 // number of pages
					 function numberOf(str){
						 return $('.numberOf').text(str)
					 }
					 switch($('#set-doctype').val()) {
						 case '234':
							 numberOf('Problems');
							 break;
						 case '125':
						 case '126':
							 numberOf('Questions');
							 break;
						 case '51':
							 numberOf('Slides');
							 break;
						 case '182':
						 case '262':
						 case '261':
							 numberOf('Assignments');
							 break;
						 case '260':
							 numberOf('Maps');
							 break;
						 default:
							 numberOf('Pages');
					 }
				 }
				 var currencyRates = {"AUD":1.3555,"CAD":1.3237,"EUR":0.8571,"GBP":0.7666,"USD":1};
				 var cppDiscountRules = {"15":5,"51":10,"101":15};
				 var cppDiscountRulesAdmmiss = {"2":5,"4":10,"6":15};
				 var currency_signes = {"GBP":"\u0026pound;","AUD":"A$\u0026nbsp;","EUR":"\u0026euro; ","CAD":"C$ ","USD":"$"};
				 var adm_dt = [142,143,144,145,154];
				 var price_MultiChoiceQuestTime = {"125":{"1":{"1":{"1":1.95,"2":1.75,"3":1.55},"3":{"3":1.2},"4":{"1":2.95,"2":2.75,"3":2.55},"5":{"1":3.45,"2":3.25,"3":3.05},"6":{"1":3.95,"2":3.75,"3":3.55},"7":{"1":4.95,"2":4.75,"3":4.55},"8":{"1":5.95,"2":5.75,"3":5.55},"9":{"1":6.95,"2":6.75,"3":6.55},"10":{"1":7.95,"2":7.75,"3":7.55},"11":{"1":1.43,"2":1.23,"3":1.03}},"2":{"1":{"1":2.95,"2":2.75,"3":2.55},"3":{"3":1.95},"4":{"1":3.95,"2":3.75,"3":3.55},"5":{"1":4.95,"2":4.75,"3":4.55},"6":{"1":5.95,"2":5.75,"3":5.55},"7":{"1":6.95,"2":6.75,"3":6.55},"8":{"1":7.95,"2":7.75,"3":7.55},"9":{"1":8.95,"2":8.75,"3":8.55},"10":{"1":9.95,"2":9.75,"3":9.55},"11":{"1":2.45,"2":2.25,"3":2.05}},"34":{"1":{"1":1.95,"2":1.75,"3":1.55},"3":{"3":1.2},"4":{"1":2.95,"2":2.75,"3":2.55},"5":{"1":3.45,"2":3.25,"3":3.05},"6":{"1":3.95,"2":3.75,"3":3.55},"7":{"1":4.95,"2":4.75,"3":4.55},"8":{"1":5.95,"2":5.75,"3":5.55},"9":{"1":6.95,"2":6.75,"3":6.55},"10":{"1":7.95,"2":7.75,"3":7.55},"11":{"1":1.45,"2":1.25,"3":1.05}},"35":{"1":{"1":2.95,"2":2.75,"3":2.55},"3":{"3":2.2},"4":{"1":3.95,"2":3.75,"3":3.55},"5":{"1":4.45,"2":4.25,"3":4.05},"6":{"1":4.95,"2":4.75,"3":4.55},"7":{"1":5.95,"2":5.75,"3":5.55},"8":{"1":6.95,"2":6.75,"3":6.55},"9":{"1":7.95,"2":7.75,"3":7.55},"10":{"1":8.95,"2":8.75,"3":8.55},"11":{"1":2.45,"2":2.25,"3":2.05}},"36":{"1":{"1":3.95,"2":3.75,"3":3.55},"3":{"3":3.2},"4":{"1":4.95,"2":4.75,"3":4.55},"5":{"1":5.45,"2":5.25,"3":5.05},"6":{"1":5.95,"2":5.75,"3":5.55},"7":{"1":6.95,"2":6.75,"3":6.55},"8":{"1":7.95,"2":7.75,"3":7.55},"9":{"1":8.95,"2":8.75,"3":8.55},"10":{"1":9.95,"2":9.75,"3":9.55},"11":{"1":3.45,"2":3.25,"3":3.05}}},"126":{"1":{"1":{"4":2.45,"5":2.25,"6":2.05},"3":{"4":2.45,"5":2.25,"6":2.05},"4":{"4":3.45,"5":3.25,"6":3.05},"5":{"4":3.95,"5":3.75,"6":3.55},"6":{"4":4.95,"5":4.75,"6":4.55},"7":{"4":5.95,"5":5.75,"6":5.55},"8":{"4":6.95,"5":6.75,"6":6.55},"9":{"4":7.95,"5":7.75,"6":7.55},"10":{"4":8.95,"5":8.75,"6":8.55},"11":{"4":1.95,"5":1.75,"6":1.55}},"2":{"1":{"4":3.45,"5":3.25,"6":3.05},"3":{"4":2.95,"5":2.75,"6":2.55},"4":{"4":4.95,"5":4.75,"6":4.55},"5":{"4":5.95,"5":5.75,"6":5.55},"6":{"4":6.95,"5":6.75,"6":6.55},"7":{"4":7.95,"5":7.75,"6":7.55},"8":{"4":8.95,"5":8.75,"6":8.55},"9":{"4":9.95,"5":9.75,"6":9.55},"10":{"4":10.95,"5":10.75,"6":10.55},"11":{"4":2.95,"5":2.75,"6":2.55}},"34":{"1":{"4":2.45,"5":2.25,"6":2.05},"3":{"4":2.45,"5":2.25,"6":2.05},"4":{"4":3.45,"5":3.25,"6":3.05},"5":{"4":3.95,"5":3.75,"6":3.55},"6":{"4":4.95,"5":4.75,"6":4.55},"7":{"4":5.95,"5":5.75,"6":5.55},"8":{"4":6.95,"5":6.75,"6":6.55},"9":{"4":7.95,"5":7.75,"6":7.55},"10":{"4":8.95,"5":8.75,"6":8.55},"11":{"4":1.95,"5":1.75,"6":1.55}},"35":{"1":{"4":3.45,"5":3.25,"6":3.05},"3":{"4":3.45,"5":3.25,"6":3.05},"4":{"4":4.45,"5":4.25,"6":4.05},"5":{"4":4.95,"5":4.75,"6":4.55},"6":{"4":5.95,"5":5.75,"6":5.55},"7":{"4":6.95,"5":6.75,"6":6.55},"8":{"4":7.95,"5":7.75,"6":7.55},"9":{"4":8.95,"5":8.75,"6":8.55},"10":{"4":9.95,"5":9.75,"6":9.55},"11":{"4":2.95,"5":2.75,"6":2.55}},"36":{"1":{"4":4.45,"5":4.25,"6":4.05},"3":{"4":4.45,"5":4.25,"6":4.05},"4":{"4":5.45,"5":5.25,"6":5.05},"5":{"4":5.95,"5":5.75,"6":5.55},"6":{"4":6.95,"5":6.75,"6":6.55},"7":{"4":7.95,"5":7.75,"6":7.55},"8":{"4":8.95,"5":8.75,"6":8.55},"9":{"4":9.95,"5":9.75,"6":9.55},"10":{"4":10.95,"5":10.75,"6":10.55},"11":{"4":3.95,"5":3.75,"6":3.55}}}};
				 var price_groups_MultiChoiceQuestTime = {"125":{"1":{"from":"1","to":"50"},"2":{"from":"51","to":"100"},"3":{"from":"101","to":"0"}},"126":{"4":{"from":"1","to":"50"},"5":{"from":"51","to":"100"},"6":{"from":"101","to":"0"}}};
				 
			  </script>
			  <script type="text/javascript">
				 var nonTechDoctypes = {125:125,126:126,152:152,163:163,174:174,182:182,217:217,222:222};
				 var techCategories = {65:65,66:66,67:67,68:68,69:69,70:70,71:71,72:72,73:73,74:74,75:75,76:76,77:77,125:125,126:126,136:136};
			  </script>
		   </div>
		</div>
	 </div>
	 <div class="advantages-block">
			<div class="center-wrapper flex-wrapper">
		  
			  <nav class="guarant-menu">
				<div class="center-wrapper">
					<ul class="flex-wrapper">
					  <li><a href="/supportcenter#order-process"><i class="icon ic1"></i>Order Process</a></li>
					  <li><a href="/supportcenter#how-to-pay"><i class="icon ic2"></i>How to Pay?</a></li>
					  <li><a href="/supportcenter#guarantees"><i class="icon ic3"></i>Guarantees</a></li>
					  <li><a href="/supportcenter#discounts"><i class="icon ic4"></i>Discounts</a></li>
					</ul>
				</div>
			 </nav>
		  
			  <div class="advantages-block__left-side">
				<h3>
				  Advantages of our services
				</h3>
		  
				<ul class="flex-wrapper">
				  <li>
					<i class="icon ic5"></i>
					<h4>Original writing</h4>
					<p>Our team consists of professional essay writers who only produce original content. They follow strict standards to produce plagiarism-free papers. </p>
				  </li>
				  <li>
					<i class="icon ic6"></i>
					<h4>Privacy</h4>
					<p>Your personal and payment details are safe with us. Our website uses secure encryption for all orders. We guarantee not to share your details with any third parties.</p> 
				  </li>
				  <li>
					<i class="icon ic7"></i>
					<h4>Free Features</h4>
					<p>We include free title and reference pages. You won't pay any more for formatting either. You can even request free amendments!</p>
				  </li>
				  <li>
					<i class="icon ic8"></i>
					<h4>24/7 Support</h4>
					<p>You can contact us at any time! Our customer support agents will provide all the information you need. If you have any questions, feel free to ask. Live chat is available 24/7. <a href="https://www.bestessays.com/customersupport.php ">Talk to us 24/7</a></p>
				  </li>
				  <li>
					<i class="icon ic9"></i>
					<h4>Discounts</h4>
					<p>You want a high-quality essay, but you still need the most affordable price. Our website offers college students quality papers at a price they can afford. Both new and loyal users get discounts.  <a href="/get-great-discounts.php ">More &gt;</a></p>
				  </li>
				  <li>
					<i class="icon ic10"></i>
					<h4>iOS App</h4>
					<p>Do you want to monitor the progress of your order at any time, or place orders from your phone? Just download our app and you’re good to go!  </p>
					<a href="https://itunes.apple.com/us/app/bestessays-essay-writing-help/id1139822538 " class="itunes">View in iTunes</a>
		  
				  </li>
				</ul>
				
			  </div>
		  
			  <div class="advantages-block__right-side">
				<div class="advantages-block__right-bg">
				</div>
				<h3>
				  <span>20</span> years of experience
				</h3>
				<div class="advantages-block__numbers animate-block active-animate">
		  
				  <div class="numbers__writers">
					<ul class="flex-wrapper" style="opacity: 1;"><li>4</li><li>3</li><li>6</li></ul>
					<h4>active writers</h4>
				  </div>
				  <div class="numbers__per-day">
					<ul class="flex-wrapper" style="opacity: 1;"><li>3</li><li>2</li><li>0</li></ul>
					<h4>orders per day</h4>
				  </div>
				  <div class="numbers__rate">
					<ul class="flex-wrapper" style="opacity: 1;"><li>0</li><li>9</li><li>4</li></ul>
					<h4>of 100 satisfied rate</h4>
				  </div>
				  
				</div>
			  </div>
		  
			</div>
		  </div>
		 <div class="first-order-block">
				<div class="center-wrapper flex-wrapper">
				   <div class="first-order-block__left-block">
					  <div class="first-order-block__disc-off animate-block active-animate">
						 15% <span>off</span>
					  </div>
					  <div class="first-order-block__girl animate-block active-animate">
					  </div>
				   </div>
				   <div class="first-order-block__right-block animate-block active-animate">
					  <h2>
						 First time here?
					  </h2>
					  <p>
						 You’ll get a high-quality service, that’s for sure. <br>
						 To welcome you, we give you a 15% discount on your first order!
					  </p>
					  <a href="/order?promo=begin15" class="btn">Use 15% discount now</a>
					  <p style="font-size:12px;">Discount applies to orders from $30</p>
				   </div>
				</div>
			 </div>
			 <div class="writers-block">
					<div class="center-wrapper">
					   <h2>
						  Writers for any paper
					   </h2>
					   <p>
						  We have 500+ professional essay writers in our team. These are experts who work in colleges and universities. <br> BestEssays is one of the most versatile essay services in the industry. You’ll get an MA or PhD writer from the subject area you choose. You can order a paper on any topic from us!
					   </p>
					   <div class="wrapper-carousel">
						  <div class="writers-carousel clearfix owl-carousel owl-theme owl-responsive-1224 owl-loaded">
							 
							 
							 
							 
							 
							 
							 
							 
							 
							 
							 
							 
						  <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(-1100px, 0px, 0px); transition: 0s; width: 6600.01px;"><div class="owl-item cloned" style="width: 366.667px; margin-right: 0px;"><div class="item">
								<div class="item__img">
								   <img src="//img3.bestessays.com/imgs/ID%20412701.jpg" alt="">
								</div>
								<div class="item__description">
								   <div class="item__id">
									  ID 412701
								   </div>
								   <div class="item__complete">
									  133 completed papers
								   </div>
								   <div class="item__stars">
									  4.3
								   </div>
								</div>
								<p>
								   A math degree from Baylor University led to a career as a CPA. Now in private practice, she finds time to work as a writer for student services, obviously focusing on financial topics. 
								</p>
								<a href="/order/?preff_wr_id[]=412701" class="btn">Сhoose this writer</a>
							 </div></div><div class="owl-item cloned" style="width: 366.667px; margin-right: 0px;"><div class="item">
								<div class="item__img">
								   <img src="//img1.bestessays.com/imgs/ID%20%2075570.png" alt="">
								</div>
								<div class="item__description">
								   <div class="item__id">
									  ID 75570
								   </div>
								   <div class="item__complete">
									  120 completed papers
								   </div>
								   <div class="item__stars">
									  4.7
								   </div>
								</div>
								<p>
								   A Master’s degree in Classical Civilization from USC and a passionate love of all periods of history makes 75570 an excellent writer for academic papers. He loves to spend vacations on archaeological digs.
								</p>
								<a href="/order/?preff_wr_id[]=75570" class="btn">Сhoose this writer</a>
							 </div></div><div class="owl-item cloned" style="width: 366.667px; margin-right: 0px;"><div class="item">
								<div class="item__img">
								   <img src="//img3.bestessays.com/imgs/ID%2034522.jpg" alt="">
								</div>
								<div class="item__description">
								   <div class="item__id">
									  ID 34522
								   </div>
								   <div class="item__complete">
									  133 completed papers
								   </div>
								   <div class="item__stars">
									  4.8
								   </div>
								</div>
								<p>
								   34522  is passionate about writing, with a Master’s in English Literature from Bristol University. She writes full time – part time for student writing services and part time on detective stories. 
								</p>
								<a href="/order/?preff_wr_id[]=34522" class="btn">Сhoose this writer</a>
							 </div></div><div class="owl-item active" style="width: 366.667px; margin-right: 0px;"><div class="item">
								<div class="item__img">
								   <img src="//img1.bestessays.com/imgs/ID%20%20429296.png" alt="">
								</div>
								<div class="item__description">
								   <div class="item__id">
									  ID 429296
								   </div>
								   <div class="item__complete">
									  127 completed papers
								   </div>
								   <div class="item__stars">
									  4.7
								   </div>
								</div>
								<p>
								   429296  is a native of Chicago and has been a lecturer in Business Studies for 14 years at xxxx University. She is a PhD. and also holds an MBA. 
								</p>
								<a href="/order/?preff_wr_id[]=429296" class="btn">Сhoose this writer</a>
							 </div></div><div class="owl-item active" style="width: 366.667px; margin-right: 0px;"><div class="item">
								<div class="item__img">
								   <img src="//img1.bestessays.com/imgs/ID%20%2051169.png" alt="">
								</div>
								<div class="item__description">
								   <div class="item__id">
									  ID 51169
								   </div>
								   <div class="item__complete">
									  89 completed papers
								   </div>
								   <div class="item__stars">
									  4.8
								   </div>
								</div>
								<p>
								   With a master’s degree in marketing and extensive corporate experience, he now writes for students. In his free time, he loves to hike and cycle in the mountains. 
								</p>
								<a href="/order/?preff_wr_id[]=51169" class="btn">Сhoose this writer</a>
							 </div></div><div class="owl-item active" style="width: 366.667px; margin-right: 0px;"><div class="item">
								<div class="item__img">
								   <img src="//img2.bestessays.com/imgs/ID%20%20373604.png" alt="">
								</div>
								<div class="item__description">
								   <div class="item__id">
									  ID 373604
								   </div>
								   <div class="item__complete">
									  76 completed papers
								   </div>
								   <div class="item__stars">
									  4.3
								   </div>
								</div>
								<p>
								   After years in senior roles in human resources, he is now a life coach and part-time writer focusing on students, helping them in areas of motivation, organization and time management. 
								</p>
								<a href="/order/?preff_wr_id[]=373604" class="btn">Сhoose this writer</a>
							 </div></div><div class="owl-item" style="width: 366.667px; margin-right: 0px;"><div class="item">
								<div class="item__img">
								   <img src="//img1.bestessays.com/imgs/ID%2084381.jpg" alt="">
								</div>
								<div class="item__description">
								   <div class="item__id">
									  ID 84381
								   </div>
								   <div class="item__complete">
									  94 completed papers
								   </div>
								   <div class="item__stars">
									  4.9
								   </div>
								</div>
								<p>
								   84381 has a Master’s in clinical psychology gained at Manchester University in the UK. He has been writing for psychology students for 12 years. In his free time, he enjoys painting, travel, and reading.
								</p>
								<a href="/order/?preff_wr_id[]=84381" class="btn">Сhoose this writer</a>
							 </div></div><div class="owl-item" style="width: 366.667px; margin-right: 0px;"><div class="item">
								<div class="item__img">
								   <img src="//img2.bestessays.com/imgs/ID%20308581.jpg" alt="">
								</div>
								<div class="item__description">
								   <div class="item__id">
									  ID 308581
								   </div>
								   <div class="item__complete">
									  125 completed papers
								   </div>
								   <div class="item__stars">
									  4.4
								   </div>
								</div>
								<p>
								   308581 is a degree-qualified travel nurse who loves the excitement of combining work and travel. Between assignments, he writes, contributes to various blogs on health and fitness and loves to keep fit. 
								</p>
								<a href="/order/?preff_wr_id[]=308581" class="btn">Сhoose this writer</a>
							 </div></div><div class="owl-item" style="width: 366.667px; margin-right: 0px;"><div class="item">
								<div class="item__img">
								   <img src="//img1.bestessays.com/imgs/ID%20101922.jpg" alt="">
								</div>
								<div class="item__description">
								   <div class="item__id">
									  ID 101922
								   </div>
								   <div class="item__complete">
									  95 completed papers
								   </div>
								   <div class="item__stars">
									  4.8
								   </div>
								</div>
								<p>
								   There’s nothing that 101922 loves more than passing on his knowledge of marketing in his writings. Always up-to-date with marketing trends, he has a BSc in Marketing from Keele University. 
								</p>
								<a href="/order/?preff_wr_id[]=101922" class="btn">Сhoose this writer</a>
							 </div></div><div class="owl-item" style="width: 366.667px; margin-right: 0px;"><div class="item">
								<div class="item__img">
								   <img src="//img1.bestessays.com/imgs/ID%20133001.jpg" alt="">
								</div>
								<div class="item__description">
								   <div class="item__id">
									  ID 133001
								   </div>
								   <div class="item__complete">
									  116 completed papers
								   </div>
								   <div class="item__stars">
									  4.7
								   </div>
								</div>
								<p>
								   133001 is highly qualified, holding a MSc in Mathematics, a PhD, an MBA and a BSc in Economics. He is a part-time lecturer and part-time writer with a special interest in world economics and politics.
								</p>
								<a href="/order/?preff_wr_id[]=133001" class="btn">Сhoose this writer</a>
							 </div></div><div class="owl-item" style="width: 366.667px; margin-right: 0px;"><div class="item">
								<div class="item__img">
								   <img src="//img3.bestessays.com/imgs/ID%2021141.jpg" alt="">
								</div>
								<div class="item__description">
								   <div class="item__id">
									  ID 21141
								   </div>
								   <div class="item__complete">
									  125 completed papers
								   </div>
								   <div class="item__stars">
									  4.6
								   </div>
								</div>
								<p>
								   When an injury forced him to give up his senior nurse management role, 21141 turned to writing. He enjoys writing about all medical and nursing topics, with a particular interest in helping students working towards a nursing qualification.
								</p>
								<a href="/order/?preff_wr_id[]=21141" class="btn">Сhoose this writer</a>
							 </div></div><div class="owl-item" style="width: 366.667px; margin-right: 0px;"><div class="item">
								<div class="item__img">
								   <img src="//img3.bestessays.com/imgs/ID%208883.jpg" alt="">
								</div>
								<div class="item__description">
								   <div class="item__id">
									  ID 8883
								   </div>
								   <div class="item__complete">
									  100 completed papers
								   </div>
								   <div class="item__stars">
									  4.7
								   </div>
								</div>
								<p>
								   After being a high school teacher for 17 years, she left a career to concentrate on her family. Now her children are grown, xxxx writes academic assignments, putting her BA in Geography to good use
								</p>
								<a href="/order/?preff_wr_id[]=8883" class="btn">Сhoose this writer</a>
							 </div></div><div class="owl-item" style="width: 366.667px; margin-right: 0px;"><div class="item">
								<div class="item__img">
								   <img src="//img3.bestessays.com/imgs/ID%20412701.jpg" alt="">
								</div>
								<div class="item__description">
								   <div class="item__id">
									  ID 412701
								   </div>
								   <div class="item__complete">
									  133 completed papers
								   </div>
								   <div class="item__stars">
									  4.3
								   </div>
								</div>
								<p>
								   A math degree from Baylor University led to a career as a CPA. Now in private practice, she finds time to work as a writer for student services, obviously focusing on financial topics. 
								</p>
								<a href="/order/?preff_wr_id[]=412701" class="btn">Сhoose this writer</a>
							 </div></div><div class="owl-item" style="width: 366.667px; margin-right: 0px;"><div class="item">
								<div class="item__img">
								   <img src="//img1.bestessays.com/imgs/ID%20%2075570.png" alt="">
								</div>
								<div class="item__description">
								   <div class="item__id">
									  ID 75570
								   </div>
								   <div class="item__complete">
									  120 completed papers
								   </div>
								   <div class="item__stars">
									  4.7
								   </div>
								</div>
								<p>
								   A Master’s degree in Classical Civilization from USC and a passionate love of all periods of history makes 75570 an excellent writer for academic papers. He loves to spend vacations on archaeological digs.
								</p>
								<a href="/order/?preff_wr_id[]=75570" class="btn">Сhoose this writer</a>
							 </div></div><div class="owl-item" style="width: 366.667px; margin-right: 0px;"><div class="item">
								<div class="item__img">
								   <img src="//img3.bestessays.com/imgs/ID%2034522.jpg" alt="">
								</div>
								<div class="item__description">
								   <div class="item__id">
									  ID 34522
								   </div>
								   <div class="item__complete">
									  133 completed papers
								   </div>
								   <div class="item__stars">
									  4.8
								   </div>
								</div>
								<p>
								   34522  is passionate about writing, with a Master’s in English Literature from Bristol University. She writes full time – part time for student writing services and part time on detective stories. 
								</p>
								<a href="/order/?preff_wr_id[]=34522" class="btn">Сhoose this writer</a>
							 </div></div><div class="owl-item cloned" style="width: 366.667px; margin-right: 0px;"><div class="item">
								<div class="item__img">
								   <img src="//img1.bestessays.com/imgs/ID%20%20429296.png" alt="">
								</div>
								<div class="item__description">
								   <div class="item__id">
									  ID 429296
								   </div>
								   <div class="item__complete">
									  127 completed papers
								   </div>
								   <div class="item__stars">
									  4.7
								   </div>
								</div>
								<p>
								   429296  is a native of Chicago and has been a lecturer in Business Studies for 14 years at xxxx University. She is a PhD. and also holds an MBA. 
								</p>
								<a href="/order/?preff_wr_id[]=429296" class="btn">Сhoose this writer</a>
							 </div></div><div class="owl-item cloned" style="width: 366.667px; margin-right: 0px;"><div class="item">
								<div class="item__img">
								   <img src="//img1.bestessays.com/imgs/ID%20%2051169.png" alt="">
								</div>
								<div class="item__description">
								   <div class="item__id">
									  ID 51169
								   </div>
								   <div class="item__complete">
									  89 completed papers
								   </div>
								   <div class="item__stars">
									  4.8
								   </div>
								</div>
								<p>
								   With a master’s degree in marketing and extensive corporate experience, he now writes for students. In his free time, he loves to hike and cycle in the mountains. 
								</p>
								<a href="/order/?preff_wr_id[]=51169" class="btn">Сhoose this writer</a>
							 </div></div><div class="owl-item cloned" style="width: 366.667px; margin-right: 0px;"><div class="item">
								<div class="item__img">
								   <img src="//img2.bestessays.com/imgs/ID%20%20373604.png" alt="">
								</div>
								<div class="item__description">
								   <div class="item__id">
									  ID 373604
								   </div>
								   <div class="item__complete">
									  76 completed papers
								   </div>
								   <div class="item__stars">
									  4.3
								   </div>
								</div>
								<p>
								   After years in senior roles in human resources, he is now a life coach and part-time writer focusing on students, helping them in areas of motivation, organization and time management. 
								</p>
								<a href="/order/?preff_wr_id[]=373604" class="btn">Сhoose this writer</a>
							 </div></div></div></div><div class="owl-controls"><div class="owl-nav"><div class="owl-prev" style="">prev</div><div class="owl-next" style="">next</div></div><div class="owl-dots" style=""><div class="owl-dot active"><span></span></div><div class="owl-dot"><span></span></div><div class="owl-dot"><span></span></div><div class="owl-dot"><span></span></div></div></div></div>
					   </div>
					</div>
				 </div>
				 <div class="tracking-block">
						<div class="center-wrapper">
						   <div class="wrapper-carousel">
							  <div class="tracking-carousel clearfix">
								 <div class="item">
									<div class="item__img animate-block">
									   <img src="/images/img-home/split/hand.png" alt="">
									</div>
									<div class="item__text animate-block">
									   <h3>
										  Easy tracking of your orders
									   </h3>
									   <a class="app-store" href="https://itunes.apple.com/us/app/bestessays/id1139822538/">
									   <img src="/images/img-home/split/app-stope1.png" alt="">
									   </a>
									</div>
								 </div>
							  </div>
						   </div>
						</div>
					 </div>
					 <div class="samples-block">
							<div class="center-wrapper">
							   <h2>
								  Samples of our work
							   </h2>
							   <div class="wrapper-carousel">
								  <div class="samples-carousel clearfix owl-carousel owl-theme owl-responsive-1224 owl-loaded">
									 
									 
									 
									 
								  <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(-1100px, 0px, 0px); transition: 0s; width: 3300px;"><div class="owl-item cloned" style="width: 275px; margin-right: 0px;"><div class="item">
										<a href="/samples/essay.pdf" target="_blank">
										   <div class="item__img">
										   </div>
										   <div class="item__description">
											  <div class="item__name">
												 Essay
											  </div>
											  <div class="item__pages">
												 5 pages, 2 days
											  </div>
										   </div>
										</a>
									 </div></div><div class="owl-item cloned" style="width: 275px; margin-right: 0px;"><div class="item">
										<a href="/samples/coursework.pdf" target="_blank">
										   <div class="item__img">
										   </div>
										   <div class="item__description">
											  <div class="item__name">
												 Coursework
											  </div>
											  <div class="item__pages">
												 5 pages, 2 days
											  </div>
										   </div>
										</a>
									 </div></div><div class="owl-item cloned" style="width: 275px; margin-right: 0px;"><div class="item">
										<a href="/samples/research_paper.pdf" target="_blank">
										   <div class="item__img">
										   </div>
										   <div class="item__description">
											  <div class="item__name">
												 Research paper
											  </div>
											  <div class="item__pages">
												 5 pages, 2 days
											  </div>
										   </div>
										</a>
									 </div></div><div class="owl-item cloned" style="width: 275px; margin-right: 0px;"><div class="item">
										<a href="/samples/case_study.pdf" target="_blank">
										   <div class="item__img">
										   </div>
										   <div class="item__description">
											  <div class="item__name">
												 Case study
											  </div>
											  <div class="item__pages">
												 5 pages, 2 days
											  </div>
										   </div>
										</a>
									 </div></div><div class="owl-item active" style="width: 275px; margin-right: 0px;"><div class="item">
										<a href="/samples/essay.pdf" target="_blank">
										   <div class="item__img">
										   </div>
										   <div class="item__description">
											  <div class="item__name">
												 Essay
											  </div>
											  <div class="item__pages">
												 5 pages, 2 days
											  </div>
										   </div>
										</a>
									 </div></div><div class="owl-item active" style="width: 275px; margin-right: 0px;"><div class="item">
										<a href="/samples/coursework.pdf" target="_blank">
										   <div class="item__img">
										   </div>
										   <div class="item__description">
											  <div class="item__name">
												 Coursework
											  </div>
											  <div class="item__pages">
												 5 pages, 2 days
											  </div>
										   </div>
										</a>
									 </div></div><div class="owl-item active" style="width: 275px; margin-right: 0px;"><div class="item">
										<a href="/samples/research_paper.pdf" target="_blank">
										   <div class="item__img">
										   </div>
										   <div class="item__description">
											  <div class="item__name">
												 Research paper
											  </div>
											  <div class="item__pages">
												 5 pages, 2 days
											  </div>
										   </div>
										</a>
									 </div></div><div class="owl-item active" style="width: 275px; margin-right: 0px;"><div class="item">
										<a href="/samples/case_study.pdf" target="_blank">
										   <div class="item__img">
										   </div>
										   <div class="item__description">
											  <div class="item__name">
												 Case study
											  </div>
											  <div class="item__pages">
												 5 pages, 2 days
											  </div>
										   </div>
										</a>
									 </div></div><div class="owl-item cloned" style="width: 275px; margin-right: 0px;"><div class="item">
										<a href="/samples/essay.pdf" target="_blank">
										   <div class="item__img">
										   </div>
										   <div class="item__description">
											  <div class="item__name">
												 Essay
											  </div>
											  <div class="item__pages">
												 5 pages, 2 days
											  </div>
										   </div>
										</a>
									 </div></div><div class="owl-item cloned" style="width: 275px; margin-right: 0px;"><div class="item">
										<a href="/samples/coursework.pdf" target="_blank">
										   <div class="item__img">
										   </div>
										   <div class="item__description">
											  <div class="item__name">
												 Coursework
											  </div>
											  <div class="item__pages">
												 5 pages, 2 days
											  </div>
										   </div>
										</a>
									 </div></div><div class="owl-item cloned" style="width: 275px; margin-right: 0px;"><div class="item">
										<a href="/samples/research_paper.pdf" target="_blank">
										   <div class="item__img">
										   </div>
										   <div class="item__description">
											  <div class="item__name">
												 Research paper
											  </div>
											  <div class="item__pages">
												 5 pages, 2 days
											  </div>
										   </div>
										</a>
									 </div></div><div class="owl-item cloned" style="width: 275px; margin-right: 0px;"><div class="item">
										<a href="/samples/case_study.pdf" target="_blank">
										   <div class="item__img">
										   </div>
										   <div class="item__description">
											  <div class="item__name">
												 Case study
											  </div>
											  <div class="item__pages">
												 5 pages, 2 days
											  </div>
										   </div>
										</a>
									 </div></div></div></div><div class="owl-controls"><div class="owl-nav"><div class="owl-prev" style="">prev</div><div class="owl-next" style="">next</div></div><div class="owl-dots" style=""><div class="owl-dot active"><span></span></div></div></div></div>
							   </div>
							   <a href="/prices.php" class="btn">Check prices</a>
							</div>
						 </div>
						 <div class="deliver-block">
								<div class="center-wrapper">
								   <h2>
									  More about best essays
								   </h2>
								   <h3>
									  Save Precious Time with Our Paper Writing Service
								   </h3>
								   <p>Essay writing can take days and sometimes weeks if you're not completely familiar with the topic. You can, however, save a lot of your time and spend it with friends and family - you can even get enough time to continue doing your part-time job. How's it possible? Just come to Bestessays.com and let one of our trained and skilled paper writers do the magic for you. </p>
								   <p>We're offering custom essay writing services since 1997, and you can always use our paper writing services with full confidence. Just complete our order form and we will let you work with one of our professional writers who will deliver the finest quality work.  </p>
								</div>
							 </div>
							 <div class="benefits-block">
									<div class="center-wrapper">
									   <h2>
										  Choose Bestessays.com as your writing partner to enjoy the following benefits
									   </h2>
									   <ul class="flex-wrapper">
										  <li>
											 <i class="icon ic11"></i>
											 <h4>Original and Unique Content</h4>
											 <p>Order essays, term papers, research papers, or another assignment without having to worry about its originality - we offer 100% original content written completely from scratch. </p>
										  </li>
										  <li>
											 <i class="icon ic12"></i>
											 <h4>Timely Delivery of Custom Papers</h4>
											 <p>Forget about dealing with any delays when it comes to placing urgent orders - our professional team of essay writers can write custom essays and papers from scratch in a short time and deliver it in a timely manner without fail. </p>
										  </li>
										  <li>
											 <i class="icon ic13"></i>
											 <h4>Responsive Customer Support</h4>
											 <p>Contact us day or night by phone, email, or live chat and be able to receive quick response from a friendly and trained representative 24 hours a day, 7 days a week. </p>
										  </li>
										  <li>
											 <i class="icon ic14"></i>
											 <h4>Great Discounts for High-Quality Papers</h4>
											 <p>Try our service and get a great discount on your first order. You’ll keep getting discounts as part of our loyalty program for all following orders you place.  </p>
										  </li>
									   </ul>
									   <a href="/order/" class="btn">Place your order now</a>
									   <div class="benefits-block__text">
										  <h3 style="text-align: center;">FULLY CUSTOMIZED ESSAYS AND PAPERS IN ALL SUBJECT AREAS</h3>
										  <p>Irrespective of how tricky the instructions are or how difficult the subject is, our essay writing experts will always find a way to deliver the finest work. Our trained writers can handle assignments in all subjects for any academic level - we pick the most suitable writer considering your requirements and instructions to ensure you receive fully customized essays and academic papers.</p>
										  <ul style="margin-top: -30px;">
											 <li style="margin-left: 20px;width: auto;list-style-type: disc;padding-left: 0;">We cover a wide range of subject
												areas, so you can count on our paper writing service to help you
												with assignments for all courses.
											 </li>
											 <li style="margin-left: 20px;width: auto;list-style-type: disc;padding-left: 0;">The writer will accurately follow
												your
												instructions on form and style.
											 </li>
											 <li style="margin-left: 20px;width: auto;list-style-type: disc;padding-left: 0;">Your paper will have proper
												references in the
												citation style you choose.
											 </li>
										  </ul>
										  <h3 style="text-align: center;">PROFESSIONAL PAPER WRITING HELP FOR ALL ACADEMIC WRITING OBSTACLES</h3>
										  <p>Students love BestEssays because they can get any type of paper here:</p>
										  <ul style="margin-top: -30px;">
											 <li style="margin-left: 20px;width: auto;list-style-type: disc;padding-left: 0;"><a href="/doc_essay.php">Custom
												essays</a>
											 </li>
											 <li style="margin-left: 20px;width: auto;list-style-type: disc;padding-left: 0;"><a href="/custom_research_paper.php">Research
												papers</a>
											 </li>
											 <li style="margin-left: 20px;width: auto;list-style-type: disc;padding-left: 0;"><a href="/custom_term_paper.php">Term
												papers</a>
											 </li>
											 <li style="margin-left: 20px;width: auto;list-style-type: disc;padding-left: 0;"><a href="/book_report.php">Book
												reviews</a>
											 </li>
											 <li style="margin-left: 20px;width: auto;list-style-type: disc;padding-left: 0;"><a href="/casestudy.php">Case
												studies</a> and
												more!
											 </li>
										  </ul>
										  <p>It doesn’t matter what type of paper you’re struggling with. We can always help! All papers are written from scratch, according to the guidelines you provide in the order form. In addition to writing help, we also provide services of editing and proofreading. We can help you make your own essays better!</p>
										  <h3 style="text-align: center;">EFFICIENT ESSAY WRITERS AT WORK</h3>
										  <p>We have hired the most talented MA and PhD native English writers who are eager to work on every type of paper required for any academic level. When you place an order, we’ll pair it with a writer who has relevant experience your topic and type of paper. You’ll get top-notch results from our experts. Plus, this experience will help you learn how proper academic writing is done. That’s what matters the most!</p>
									   </div>
									</div>
								 </div>
								 <div class="discouts-block">
										<div class="center-wrapper">
										   <h2>
											  It’s Your First Order?
										   </h2>
										   <p>
											  We’ll give you a discount! You get <span>15% off</span> the full price. Enjoy!    
										   </p>
										   <a href="/order?promo=begin15" class="btn">
										   Order with a 15% discount now
										   </a>
										   <p style="font-size:12px;">Discount applies to orders from $30</p>
										</div>
									 </div>
	
	
@endsection
