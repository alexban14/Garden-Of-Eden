import { NgModule } from '@angular/core';
import { BrowserModule } from '@angular/platform-browser';
import { RouterModule } from '@angular/router';
import { AppComponent } from './app.component';
import { appRoutes } from './app.routes';
import { HomeComponent } from './home/home.component';
import { BlogPostsComponent } from './forum/blog-posts/blog-posts.component';
import { ContactPageComponent } from './contact/contact-page/contact-page.component';
import { AboutUsComponent } from './about/about-us/about-us.component';
import { PrizesPageComponent } from './prizes/prizes-page/prizes-page.component';
import { LoginComponent } from './auth/login/login.component';
import { RegisterComponent } from './auth/register/register.component';
import { NotFoundComponent } from './not_found/not-found/not-found.component';
import { PostsListComponent } from './forum/blog-posts/posts-list/posts-list/posts-list.component';
import { PostShowComponent } from './forum/blog-posts/post-show/post-show/post-show.component';
import { PostNewComponent } from './forum/blog-posts/post-new/post-new/post-new.component';
import { PostEditComponent } from './forum/blog-posts/post-edit/post-edit/post-edit.component';
import { PrizesListComponent } from './prizes/prizes-page/prizes-list/prizes-list.component';
import { PrizeEditComponent } from './prizes/prizes-page/prize-edit/prize-edit.component';
import { PrizeShowComponent } from './prizes/prizes-page/prize-show/prize-show.component';
import { PrizeCreateComponent } from './prizes/prizes-page/prize-create/prize-create.component';

@NgModule({
  declarations: [
    AppComponent,
    AboutUsComponent,
    BlogPostsComponent,
    ContactPageComponent,
    HomeComponent,
    PostsListComponent,
    PostShowComponent,
    PostNewComponent,
    PostEditComponent,
    PrizesPageComponent,
    PrizesListComponent,
    PrizeShowComponent,
    PrizeEditComponent,
    LoginComponent,
    RegisterComponent,
    NotFoundComponent,
    PrizeCreateComponent,
  ],
  imports: [
    BrowserModule,
    RouterModule.forRoot(appRoutes, { initialNavigation: 'enabledBlocking' }),
  ],
  providers: [],
  bootstrap: [AppComponent],
})
export class AppModule {}
