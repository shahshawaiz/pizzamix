            <!-- ////////////////////////////////// Acnkowldgmed /////////////////////////// -->               
            <div class="content">

                <h4>Approved</h4>
    
                <table class="table table-striped tablesorter">

                        <thead>
                            <tr>
                              <th width="20%">Order ID</th>
                              <th width="20%">Customer ID</th>     
                              <th width="20%">Approval Time</th>                                    
                              <th width="20%">Delivery Time</th>
                              <th width="20%"></th>

                            </tr>
                        </thead>

                         <tbody>

                        @if(count($orders->approved->get()) != 0)

                            @foreach($orders->approved->get() as $req)                
                                <tr>
                                    <td width="20%"><p>{{$req->order_id}}</p></td>
                                    <td width="20%">1</td>
                                    <td width="20%">
                                      @if( $req->approval_time == null )
                                        N/A
                                      @else
                                        $req->approval_time
                                      @endif                                  
                                    </td>
                                    <td width="20%">
                                      @if( $req->delivery_time == null )
                                        N/A
                                      @else
                                        $req->delivery_time
                                      @endif
                                    </td> 
                                    <td width="20%">
                                      <button type="button" value="{{$req->id}}"class="btnUpdateStatus btn btn-success btn-xs">  
                                        Dispatch
                                      </button>
                                      <button type="button" value="{{$req->id}}"class="btnUpdateStatus btn btn-danger btn-xs"> 
                                        Cancel
                                      </button>                                                                                   
                                    </td>                          
                                </tr>                                                                  
                            @endforeach      

                          @else
                                <tr>
                                    <td colspan="6" style="text-align:center"><p>No requests found!</p></td>                          
                                </tr>                 
                          @endif                      
                        </tbody>                                   
                </table>                            
            </div>
            
            <!-- ////////////////////////////////// Acnkowldgmed /////////////////////////// -->
