  @foreach($paymentSheets as $paymentSheet)
           @php 
             $payments = $paymentSheet->payments;
           @endphp
            <!-- Modal -->
            <div class="modal fade" id="paymentSheetsModal{{ $paymentSheet->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Transactions</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <table class="table table-striped table-bordered table-resp">
                      <thead>
                        <tr>
                          <th scope="col">Sno</th>
                          <th scope="col">Sale Date</th>
                          <th scope="col">Received Amount</th>
                          <th scope="col">Balance Amount</th>
                          <th scope="col">Mode Of Payment</th>
                          <th scope="col">Transaction No</th>
                          <th scope="col">Transaction Slip</th>
                          <th scope="col">Action</th>
                        </tr>
                      </thead>
                      <tbody>
                           @php $count = 0; @endphp
                           @foreach($payments as $payment)
                                <tr>
                                  <td>{{ ++$count }}</td>
                                  <td>{{ (!empty($payment->sale_date) ? \Carbon\Carbon::parse($payment->sale_date)->format('d M, Y') : '-') }}</td>
                                  <td>{{ number_format($payment->received_amount, 2) }}</td>
                                  <td>{{ number_format($payment->balance_amount, 2) }}</td>
                                  <td>{{ $payment->mode_of_payment }}</td>
                                  <td>{{ $payment->transaction_no }}</td>
                                  <td>
                                      @if(!empty($payment->attachment))
                                        <a href="{{ asset('public/storage/paymentsheets/'.$payment->attachment) }}" target="_blank" style="color:#007bff;"><u>View Slip</u></a>
                                      @else
                                        -
                                      @endif
                                  </td>
                                  <td>
                                    <a href="{{ url('admin/paymentsheets/transactions/'.$payment->id.'/delete') }}" class="btn btn-danger btn-sm mb-1" title="Delete" onClick="return confirm('Are you sure you want to delete?');"><i class="fa fa-trash"></i></a>
                                   </td>
                                </tr>
                            @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
        @endforeach
        
        
        <!-- Modal -->
            <div class="modal fade" id="downloadpaymentsheet" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-md modal-dialog-centered" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Transactions</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <form class="row" action="#" method="POST">
                        <div class="form-group col-sm-6">
                            <label>From</label>
                            <input type="date" class="form-control shadow" name="" required="" />
                        </div>
                        <div class="form-group col-sm-6">
                             <label>To</label>
                            <input type="date" class="form-control shadow" required="" />
                        </div>
                        <div class="col-sm-12 text-center">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>

                  </div>
                </div>
              </div>
            </div>
        
        // End Foreach

         
    <script>
        $('#total_received_amount').html(Number('{{ $totalRecievedAmount }}').toFixed(2));
        
        $('#paymentSheetsTable').DataTable();
    </script>